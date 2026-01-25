<?php

namespace App\Modules\Contacts\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ShortContactsInfo extends Component
{
    public function render(): View
    {
        return view('components.short-contacts-info.index');
    }
}
