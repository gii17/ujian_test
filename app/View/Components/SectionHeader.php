<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionHeader extends Component
{
    public $basepage, $page, $page2;
    /**
     * Create a new component instance.
     */
    public function __construct($basepage, $page, $page2)
    {
        $this->basepage = $basepage;
        $this->page = $page;
        $this->page2 = $page2;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.section-header');
    }
}
