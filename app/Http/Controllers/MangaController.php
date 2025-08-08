<?php

namespace App\Http\Controllers;

use App\Models\Manga;

class MangaController extends Controller
{
    public function index()
    {
        $mangas = Manga::latest()->paginate(12);
        return view('manga.index', compact('mangas'));
    }

    public function show(Manga $manga)
    {
        $chapters = $manga->chapters()->orderBy('chapter_number', 'desc')->get();
        return view('manga.show', compact('manga', 'chapters'));
    }
}
