<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Http\Controllers\InfoWebController;

class Layout extends Component
{
    /**
     * Create a new component instance.
     */
    protected $info_web;
    public function __construct()
    {
        $this->info_web = new InfoWebController();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.layout', [
            'meta' => $this->info_web->info_app(),
        ]);
    }
}
