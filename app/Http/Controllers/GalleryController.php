<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::paginate(12); 
        return view('gallery.index', compact('galleries'));
    }
    
    public function image()
    {
        $galleries = Gallery::paginate(12); 
        return view('image', compact('galleries'));
    }
    
    
    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);

        $imageName = $request->file('image')->store('gallery', 'public');

        Gallery::create(['image' => $imageName]);

        return redirect()->route('gallery.index')->with('success', 'Image successfully added');
    }
    
    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5048',
        ]);

        if ($request->hasFile('image')) {
            Storage::delete('public/' . $gallery->image);

            $imagePath = $request->file('image')->store('gallery', 'public');
            $gallery->update([
                'image' => $imagePath,
            ]);
        }

        return redirect()->route('gallery.index')->with('success', 'Image successfully updated!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::find($id);

        if (Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Image successfully deleted!');
    }

    public function showGallery()
    {
        $galleries = Gallery::all();

        return view('gallery', compact('galleries'));
    }

    public function show($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('gallery.show', compact('gallery'));
    }
}