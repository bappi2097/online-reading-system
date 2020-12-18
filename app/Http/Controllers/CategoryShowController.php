<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class CategoryShowController extends Controller
{
    public function showCategory($slug)
    {
        $news['data'] = NewsCategory::where('slug', $slug)->first()->news()->latest()->paginate(11);
        $news['category'] = NewsCategory::select('slug', 'name')->where('slug', $slug)->first();
        return view('category', [
            'newsC' => $news,
        ]);
    }
}
