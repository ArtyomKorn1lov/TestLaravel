<?php

namespace App\Modules\News\Models;

use App\Core\Models\Link;
use App\Core\Models\Picture;

class News
{
    /**
     * @param int $id
     * @param string $code
     * @param string $name
     * @param string $description
     * @param Picture|null $picture
     * @param Link|null $link
     */
    public function __construct(
        public int $id,
        public string $code,
        public string $name,
        public string $description,
        public ?Picture $picture = null,
        public ?Link $link = null,
    )
    {
    }
}
