<?php

namespace App\Modules\General\Model;

use App\Core\Models\Picture;
use App\Core\Models\Link;

class Banner
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
