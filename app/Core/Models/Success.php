<?php

namespace App\Core\Models;

class Success
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
