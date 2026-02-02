<?php

namespace App\Modules\News\Repositories;

use App\Modules\News\Models\Project;
use Illuminate\Support\Collection;

interface ProjectRepositoryInterface
{
    /**
     * @return Collection<int, Project>
     */
    public function find(): Collection;
}
