<?php

namespace App\Modules\General\Responses;

use App\Modules\General\Model\Banner;

class BannerResponse
{
    /**
     * @param Banner $banner
     * @return array
     */
    public static function toArray(Banner $banner): array
    {
        return [
            'id' => $banner->id,
            'name' => $banner->name,
            'description' => $banner->description,
            'picture' => $banner->picture->src ?? '',
            'link' => $banner->link->url ?? '',
        ];
    }
}
