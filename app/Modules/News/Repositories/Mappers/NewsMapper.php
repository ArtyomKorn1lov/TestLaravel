<?php

namespace App\Modules\News\Repositories\Mappers;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use App\Modules\News\ORM\News as NewsOrm;
use App\Modules\News\Models\News;
use App\Core\Models\Picture;
use App\Core\Models\Link;

class NewsMapper
{
    /**
     * @param EloquentCollection<int, NewsOrm> $ormCollection
     * @return Collection<int, News>
     */
    public static function mapOrmToModelCollection(EloquentCollection $ormCollection): Collection
    {
        if ($ormCollection->isEmpty()) {
            return collect();
        }
        return $ormCollection->map(fn (NewsOrm $orm) => self::mapOrmToModel($orm));
    }

    /**
     * @param NewsOrm $orm
     * @return News
     */
    public static function mapOrmToModel(NewsOrm $orm): News
    {
        return new News(
            id: $orm->id,
            code: $orm->code,
            name: $orm->name,
            description: $orm->description ?? '',
            picture: !empty($orm->picture)
                ? new Picture(
                    id: $orm->picture->id,
                    src: $orm->picture->src
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
