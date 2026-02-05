<?php

namespace App\Modules\General\Repositories;

use Illuminate\Support\Collection;
use App\Modules\General\Model\Banner;

interface BannerRepositoryInterface
{
    /**
     * @param string $code
     * @return Banner|null
     * @throws \Throwable
     */
    public function findByCode(string $code): ?Banner;
}
