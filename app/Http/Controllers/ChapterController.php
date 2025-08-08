<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use App\Models\Page;

class ChapterController extends Controller
{
    public function read(Chapter $chapter, $pageNumber = 1)
    {
        $page = $chapter->pages()->where('page_number', $pageNumber)->firstOrFail();
        $totalPages = $chapter->pages()->count();

        return view('chapter.read', [
            'chapter' => $chapter,
            'page' => $page,
            'currentPage' => $pageNumber,
            'totalPages' => $totalPages
        ]);
    }
}
