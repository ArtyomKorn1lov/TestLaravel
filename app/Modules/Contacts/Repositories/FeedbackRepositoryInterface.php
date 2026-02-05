<?php

namespace App\Modules\Contacts\Repositories;

use App\Modules\Contacts\Models\Feedback;

interface FeedbackRepositoryInterface
{
    /**
     * @param Feedback $model
     * @return void
     * @throws \Throwable
     */
    public function create(
        Feedback $model
    ): void;
}
