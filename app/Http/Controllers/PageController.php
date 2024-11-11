<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function berita()
    {
        return view('berita');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function tentang()
    {
        return view('tentang');
    }
}
