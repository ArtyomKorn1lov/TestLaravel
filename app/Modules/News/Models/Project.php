<?php

namespace App\Modules\News\Models;

use App\Core\Models\Picture;

class Project
{
    public function __construct(
        public int $id,
        public string $code,
        public string $name,
        public bool $isPrimary = false,
        public ?Picture $picture = null,
    )
    {
    }
}
