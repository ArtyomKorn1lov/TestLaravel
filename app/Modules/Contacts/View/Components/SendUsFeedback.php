<?php

namespace App\Modules\Contacts\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SendUsFeedback extends Component
{
    public function render(): View
    {
        return view('components.send-us-feedback.index');
    }
}
