<?php

namespace App\Http\Controllers;

use App\Models\Meta;
use App\Models\News;
use Illuminate\Http\Request;

class NewsShowController extends Controller
{
    public function showNews($slug)
    {
        $news = News::where(['slug' => $slug])->first();
        $related_news = [];
        $cnt = 0;
        foreach ($news->newsCategories as $category) {
            foreach ($category->news as $catnews) {
                $cnt++;
                $related_news[] = [
                    "data" => $catnews,
                    "category" => $category
                ];
                if ($cnt == 4) {
                    break;
                }
            }
            if ($cnt == 4) {
                break;
            }
        }
        // dd($related_news);
        return view('news', [
            'meta' => Meta::first(),
            "news" => $news,
            "related_news" => $related_news,
            "comments" => $news->comments
        ]);
    }
}
