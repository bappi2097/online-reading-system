<?php

namespace App\Http\Controllers;

use App\Models\ContentLayout;
use App\Models\Meta;
use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $paginate = [5, 2, 3];
        $contentLayouts = ContentLayout::orderBy('position')->get();
        // $contentLayouts = ContentLayout::orderBy('position')->get()->map(function ($contentLayout) {
        //     $paginate = [5, 2, 3];
        //     return $contentLayout->newsCategory()->first()->news()->paginate($paginate[$contentLayout->layout_no - 1]);
        // });
        // dd($contentLayouts);
        foreach ($contentLayouts as $contentLayout) {
            $contentLayout->setRelation('newsCategory', $contentLayout->newsCategory()->first()->setRelation('news', $contentLayout->newsCategory()->first()->news()->latest()->paginate($paginate[$contentLayout->layout_no - 1])));
        }
        // dd($contentLayouts);
        return view('body', [
            'meta' => Meta::first(),
            "contentLayouts" => $contentLayouts
        ]);
    }
}
