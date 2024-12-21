<?php

namespace App\View\Components\Dashboard\Layouts;

use App\Models\Dashboard\Sidebars;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public $parent;
    public function __construct()
    {
        $this->parent = Sidebars::where('status','Active')->whereNull('parent_id')->with('child')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.layouts.sidebar');
    }
}
