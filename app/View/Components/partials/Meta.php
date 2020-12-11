<?php

namespace App\View\Components\partials;

use App\Models\Meta as ModelsMeta;
use Illuminate\View\Component;

class Meta extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $meta;
    public function __construct()
    {
        $this->meta = ModelsMeta::first();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.partials.meta');
    }
}
