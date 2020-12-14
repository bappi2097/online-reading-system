<?php

namespace App\View\Components\partials\body;

use Illuminate\View\Component;

class RelatedNews extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $related_news;
    public function __construct($relatedNews)
    {
        $this->related_news = $relatedNews;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.body.related-news');
    }
}
