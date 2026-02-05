<?php

namespace App\Modules\News\Responses;

use App\Modules\News\Models\News;

class NewsResponse
{
    /**
     * @param News $model
     * @return array
     */
    public static function toArray(News $model): array
    {
        return [
            'id' => $model->id,
            'name' => $model->name,
            'description' => $model->description,
            'picture' => $model->picture->src ?? '',
            'link' => $model->link->url ?? '',
        ];
    }
}
