<?php

namespace App\Modules\Contacts\Repositories;

use App\Modules\Contacts\Models\Feedback;
use App\Modules\Contacts\Repositories\Mappers\FeedbackMapper;

class FeedbackRepository implements FeedbackRepositoryInterface
{

    public function create(Feedback $model): void
    {
        $orm = FeedbackMapper::mapModelToOrm($model);
        $orm->save();
    }
}
