<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class CategoryShowController extends Controller
{
    public function showCategory($slug)
    {
        dd(NewsCategory::where('slug', $slug)->get());
        return view('category', [
            'categories' => NewsCategory::where('slug', $slug)->get()
        ]);
    }
}
