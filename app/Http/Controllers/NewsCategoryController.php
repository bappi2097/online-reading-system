<?php

namespace App\Http\Controllers;

use App\Models\NewsCategory;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.news-category.index', [
            'news_categories' => NewsCategory::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news-category.create');
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
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'unique:news_categories']
        ]);

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
        ];
        NewsCategory::create($data);
        if (NewsCategory::where($data)->exists()) {
            return back()->with(notification('success', 'News Category Added Successfully'));
        }
        return back()->with(notification('danger', 'Something went wrong!'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function show(NewsCategory $newsCategory)
    {
        return view('admin.news-category.show', compact('newsCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsCategory $newsCategory)
    {
        return view('admin.news-category.edit', compact('newsCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsCategory $newsCategory)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'unique:news_categories,slug,' . $newsCategory->id]
        ]);

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
        ];
        if ($newsCategory->update($data)) {
            return back()->with(notification('success', 'News Category Updated Successfully'));
        }
        return back()->with(notification('danger', 'Something went wrong!'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewsCategory  $newsCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsCategory $newsCategory)
    {
        if ($newsCategory->delete()) {
            return back()->with(notification('success', 'News Category Deleted Successfully'));
        }
        return back()->with(notification('danger', 'Something went wrong!'));
    }
}
