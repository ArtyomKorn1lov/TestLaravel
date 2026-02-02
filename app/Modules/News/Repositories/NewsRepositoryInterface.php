<?php

namespace App\Modules\News\Repositories;

use App\Modules\News\Models\News;
use Illuminate\Support\Collection;

interface NewsRepositoryInterface
{
    /**
     * @return Collection<int, News>
     * @throws \Throwable
     */
    public function find(): Collection;
}
