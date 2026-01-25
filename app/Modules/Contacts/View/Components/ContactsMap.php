<?php

namespace App\Modules\Contacts\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactsMap extends Component
{
    public function render(): View
    {
        return view('components.contacts-map.index');
    }
}
