<?php

namespace App\View\Components\partials;

use App\Models\News;
use App\Models\NewsCategory;
use Illuminate\View\Component;

class Hero extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $hotNews;
    public $topViews;
    public function __construct()
    {
        $this->hotNews = NewsCategory::where(['slug' => 'hot-news'])->first()->news()->latest()->first();
        $this->topViews = NewsCategory::where(['slug' => 'top-viewed'])->first()->news()->latest()->take(2)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.hero');
    }
}
