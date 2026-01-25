<?php

namespace App\Modules\News\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NewsList extends Component
{
    public function render(): View
    {
        return view('components.news-list.index');
    }
}
