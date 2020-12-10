<?php

namespace App\Http\Controllers;

use App\Models\ContentLayout;
use App\Models\NewsCategory;
use Illuminate\Http\Request;

class ContentLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.content-layout.index', [
            "contentLayouts" => ContentLayout::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.content-layout.create', [
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
            "news_category_id" => ['required', 'numeric', 'unique:content_layouts'],
            'position' => ['required', 'numeric'],
            'layout_no' => ['required', 'numeric'],

        ]);
        $data = [
            "news_category_id" => $request->news_category_id,
            'position' => $request->position,
            'layout_no' => $request->layout_no,
        ];

        if (ContentLayout::insert($data)) {
            return back()->with(notification('success', "Content Layout Successfully Saved"));
        } else {
            return back()->with(notification('danger', "Something Went Wrong"));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContentLayout  $contentLayout
     * @return \Illuminate\Http\Response
     */
    public function show(ContentLayout $contentLayout)
    {
        return view('admin.content-layout.show', compact('contentLayout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContentLayout  $contentLayout
     * @return \Illuminate\Http\Response
     */
    public function edit(ContentLayout $contentLayout)
    {
        return view('admin.content-layout.edit', [
            'categories' => NewsCategory::all(),
            'contentLayout' => $contentLayout
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContentLayout  $contentLayout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentLayout $contentLayout)
    {
        $this->validate($request, [
            "news_category_id" => ['required', 'numeric', 'unique:content_layouts,news_category_id,' . $contentLayout->id],
            'position' => ['required', 'numeric'],
            'layout_no' => ['required', 'numeric'],

        ]);
        $data = [
            "news_category_id" => $request->news_category_id,
            'position' => $request->position,
            'layout_no' => $request->layout_no,
        ];
        if ($contentLayout->update($data)) {
            return back()->with(notification('success', "Content Layout Updated Successfully"));
        } else {
            return back()->with(notification('danger', "Something Went Wrong"));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContentLayout  $contentLayout
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContentLayout $contentLayout)
    {
        if ($contentLayout->delete()) {
            return back()->with(notification('success', "Content Layout Deleted Successfully"));
        } else {
            return back()->with(notification('danger', "Something Went Wrong"));
        }
    }
}
