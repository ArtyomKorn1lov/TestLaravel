<?php

namespace App\Modules\News\Responses;

use App\Modules\News\Models\Project;

class ProjectResponse
{
    /**
     * @param Project $model
     * @return array
     */
    public static function toArray(Project $model): array
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'picture' => $model->picture->src ?? '',
        ];
    }
}
