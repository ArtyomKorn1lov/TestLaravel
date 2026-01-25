<?php

namespace App\Modules\News\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ProjectsList extends Component
{
    public function render(): View
    {
        return view('components.project-list.index');
    }
}
