<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\NewsCategory;
use App\Models\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news.index', [
            'newses' => News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create', [
            'tags' => Tag::all(),
            'categories' => NewsCategory::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'string'],
            'slug' => ['required', 'string', 'unique:news,slug'],
            'author' => ['required', 'string'],
            'short_description' => ['required', 'string', 'max:400'],
            'body' => ['required'],
            'quote' => ['nullable', 'string'],
            'categories' => ['required'],
            'tags' => ['required'],
            'image' => ['required', 'file'],
        ]);

        $news = [
            'title' => $request->title,
            'slug' => $request->slug,
            'author' => $request->author,
            'short_description' => $request->short_description,
            'body' => $request->body,
            'quote' => $request->quote
        ];

        $newsCategoriesId = NewsCategory::whereIn('slug', $request->categories)->get()->map(function ($data) {
            return $data->id;
        });

        $tagsID = $this->existsOrCreateTags($request->tags);

        // dd($tagsID);

        $newsImage = uniqid(11) . '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('news\images'), $newsImage);
        $news["image"] = $newsImage;

        dd(News::create($news));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
    }
    public function existsOrCreateTags($tags)
    {
        $tagsId = [];
        foreach ($tags as $tag) {
            $tagsId[] = Tag::firstOrCreate(['name' => $tag])->id;
        }
        return $tagsId;
    }
}
