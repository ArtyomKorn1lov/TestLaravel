<?php

namespace App\Modules\News\Repositories\Mappers;

use App\Core\Models\Picture;
use Illuminate\Database\Eloquent\Collection as EloquentCollection;
use Illuminate\Support\Collection;
use App\Modules\News\ORM\Project as ProjectOrm;
use App\Modules\News\Models\Project;

class ProjectMapper
{
    /**
     * @param EloquentCollection<int, ProjectOrm> $ormCollection
     * @return Collection<int, Project>
     */
    public static function mapOrmToModelCollection(EloquentCollection $ormCollection): Collection
    {
        if ($ormCollection->isEmpty()) {
            return collect();
        }
        return $ormCollection->map(fn (ProjectOrm $orm) => self::mapOrmToModel($orm));
    }

    /**
     * @param ProjectOrm $orm
     * @return Project
     */
    public static function mapOrmToModel(ProjectOrm $orm): Project
    {
        return new Project(
            id: $orm->id,
            code: $orm->code,
            name: $orm->name,
            isPrimary: $orm->is_primary ?? false,
            picture: !empty($orm->picture)
                ? new Picture(
                    id: $orm->picture->id,
                    src: $orm->picture->src,
                )
                : null,
        );
    }
}
