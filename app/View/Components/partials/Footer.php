<?php

namespace App\View\Components\partials;

use App\Models\SocialMedia;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $socialMedias;
    public function __construct()
    {
        $this->socialMedias = SocialMedia::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.footer');
    }
}
