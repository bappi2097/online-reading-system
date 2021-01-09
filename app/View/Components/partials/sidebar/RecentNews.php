<?php

namespace App\View\Components\partials\sidebar;

use App\Models\News;
use Illuminate\View\Component;

class RecentNews extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $recentNews;
    public function __construct()
    {
        $this->recentNews = News::latest()->paginate(10);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.sidebar.recent-news');
    }
}
