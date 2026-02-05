<?php

namespace App\Modules\News\Repositories;

use Illuminate\Support\Collection;
use App\Modules\News\Repositories\Mappers\NewsMapper;
use App\Modules\News\ORM\News as NewsOrm;
use App\Modules\News\Models\News;

class NewsRepository implements NewsRepositoryInterface
{
    /**
     * @return Collection<int, News>
     */
    public function find(): Collection
    {
        $ormCollection = NewsOrm::query()
            ->get();
        return NewsMapper::mapOrmToModelCollection($ormCollection);
    }
}
