<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB; 

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first(); 

        return view('about.index', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('about.edit', compact('about'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tasty_food' => 'required',
            'visi' => 'required',
            'misi' => 'required',
        ]);

        $about = About::findOrFail($id);
        $about->tasty_food = $request->input('tasty_food');
        $about->visi = $request->input('visi');
        $about->misi = $request->input('misi');
        $about->save();

        return redirect()->route('about.index')->with('success', 'About section updated successfully!');
    }

    public function showAboutPage()
    {
        $about = DB::table('about')->where('id', 1)->first();

        return view('tentang', ['about' => $about]);
    }
}
