<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $data = "%" . join('%', str_split($request->search)) . "%";
        $newsC = News::where('title', 'LIKE', $data)->latest()->paginate(10);
        return view('search', compact('newsC'));
    }
}
