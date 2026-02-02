<?php

namespace App\Core\Models;

class Picture
{
    /**
     * @param int $id
     * @param string $src
     */
    public function __construct(
        public int $id,
        public string $src,
    )
    {
    }
}
