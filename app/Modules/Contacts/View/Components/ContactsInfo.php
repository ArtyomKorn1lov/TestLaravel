<?php

namespace App\Modules\Contacts\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactsInfo extends Component
{
    public function render(): View
    {
        return view('components.contacts-info.index');
    }
}
