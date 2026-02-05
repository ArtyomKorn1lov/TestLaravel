<?php

namespace App\Modules\Contacts\Enums;

enum ContactTypes: string
{
    case address = 'address';
    case phone = 'phone';
    case email = 'email';
    case website = 'website';
}
