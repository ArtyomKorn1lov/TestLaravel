<?php

namespace App\Modules\Contacts\Models;

class Feedback
{
    /**
     * @param string $name
     * @param string $email
     * @param string $message
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $message = '',
    )
    {
    }
}
