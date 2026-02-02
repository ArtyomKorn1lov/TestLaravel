<?php

namespace App\Core\Models;

class Link
{
    /**
     * @param int $id
     * @param string $url
     */
    public function __construct(
        public int $id,
        public string $url
    )
    {
    }
}
