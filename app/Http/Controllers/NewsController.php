<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    
    public function index()
    {
        $news = News::all();

       
        return view('news.index', compact('news'));
    }
    public function berita()
    {
        $news = News::paginate(8); 
        return view('berita', compact('news'));
    }
    

   
    public function create()
    {
        return view('news.create');
    }

   
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required'],
            'content' => ['required'],
            'image' => ['required'],
        ]);

        $imageName = $request->file('image')->hashName();

        $validated['image'] = $imageName;
        
        $newsDirectory = public_path() . '/news-images';
        $request->file('image')->move($newsDirectory, $imageName);
        
        News::create($validated);

        return redirect()->route('news.index')->with('success', 'Data berhasil ditambahkan.');
    }

   
    public function edit(string $id)
    {
        $news = News::find($id);

        return view('news.edit', compact('news'));
    }

   
    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
    
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('news-images'), $fileName);
    
            // Hapus gambar lama
            if ($news->image) {
                unlink(public_path('news-images/' . $news->image));
            }
    
            $news->image = $fileName;
        }
    
        $news->title = $request->title;
        $news->content = $request->content;
        $news->save();
    
        return redirect()->route('news.index')->with('success', 'News updated successfully');
    }
        
  
    public function destroy(string $id)
    {
        $news = News::find($id);

        File::delete(public_path() . "/news-images/$news->image");

        $news->delete();

        return redirect()->route('news.index')->with('success', 'Data berhasil dihapus.');        
    }
    public function show($id)
{
    $news = News::findOrFail($id); 
    return view('news.show', compact('news')); 
}
}
