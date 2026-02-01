<?php

namespace App\Modules\Contacts\Models;

use App\Modules\Contacts\Enums\ContactTypes;

class Contact
{
    /**
     * @param int $id
     * @param string $code
     * @param ContactTypes $type
     * @param string $value
     * @param bool $showFooter
     * @param string $label
     */
    public function __construct(
        public int $id,
        public string $code,
        public ContactTypes $type,
        public string $value,
        public bool $showFooter = false,
        public string $label = '',
    )
    {
    }
}
