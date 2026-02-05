<?php

namespace App\Modules\News\Repositories;

use Illuminate\Support\Collection;
use App\Modules\News\Repositories\Mappers\ProjectMapper;
use App\Modules\News\ORM\Project as ProjectOrm;
use App\Modules\News\Models\Project;

class ProjectRepository implements ProjectRepositoryInterface
{
    /**
     * @return Collection<int, Project>
     */
    public function find(): Collection
    {
        $ormCollection = ProjectOrm::query()
            ->get();
        return ProjectMapper::mapOrmToModelCollection($ormCollection);
    }
}
