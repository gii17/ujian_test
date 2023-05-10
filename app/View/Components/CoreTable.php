<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CoreTable extends Component
{
    public $idTable;
    /**
     * Create a new component instance.
     */
    public function __construct($idTable)
    {
        $this->idTable = $idTable;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.core-table');
    }
}
