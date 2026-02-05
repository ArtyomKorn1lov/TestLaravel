<?php

namespace App\Core\Models;

class ErrorMessage
{
    /**
     * @param string $message
     */
    public function __construct(
        public string $message,
    )
    {
    }
}
