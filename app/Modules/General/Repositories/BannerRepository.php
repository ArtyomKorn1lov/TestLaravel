<?php

namespace App\Modules\General\Repositories;

use App\Modules\General\Model\Banner;
use App\Modules\General\ORM\Banner as BannerOrm;
use App\Modules\General\Repositories\Mappers\BannerMapper;

class BannerRepository implements BannerRepositoryInterface
{
    /**
     * @param string $code
     * @return Banner|null
     */
    public function findByCode(string $code): ?Banner
    {
        $orm = BannerOrm::query()
            ->where('code', $code)
            ->first();
        return !empty($orm) ? BannerMapper::mapOrmToModel($orm) : null;
    }
}
