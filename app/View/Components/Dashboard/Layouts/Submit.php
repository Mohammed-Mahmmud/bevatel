<?php

namespace App\View\Components\Dashboard\Layouts;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Submit extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public $model = null, public $orders = null)
    {
        $this->model = $model->first() ? get_class($model->first()) : redirect()->back();
        $this->orders = $orders ? $orders : redirect()->back();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.dashboard.layouts.submit');
    }
}
