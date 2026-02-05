<?php

namespace App\Modules\General\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Menu extends Component
{
    public function render(): View
    {
        return view('components.menu.index');
    }
}
