<?php

namespace App\Modules\General\Repositories\Mappers;

use App\Core\Models\Link;
use App\Core\Models\Picture;
use App\Modules\General\Model\Banner;
use App\Modules\General\ORM\Banner as BannerOrm;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;

class BannerMapper
{
    /**
     * @param BannerOrm $orm
     * @return Banner
     */
    public static function mapOrmToModel(BannerOrm $orm): Banner
    {
        return new Banner(
            id: $orm->id,
            code: $orm->code,
            name: $orm->name,
            description: $orm->description,
            picture: !empty($orm->picture)
                ? new Picture(
                    id: $orm->picture->id,
                    src: $orm->picture->src,
                )
                : null,
            link: !empty($orm->link)
                ? new Link(
                    id: $orm->link->id,
                    url: $orm->link->url,
                )
                : null,
        );
    }
}
