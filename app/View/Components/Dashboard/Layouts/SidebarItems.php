<?php

namespace App\View\Components\Dashboard\Layouts;

use App\Models\Dashboard\Sidebars;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Request;
use Illuminate\View\Component;

class SidebarItems extends Component
{
    /**
     * Create a new component instance.
     */
    public $item;
    public $request;
    public function __construct(Sidebars $item)
    {
        $this->item = $item;
        $this->request=Request::url();
    }


    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.layouts.sidebar-items');
    }
}
