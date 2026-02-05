<?php

namespace App\Modules\Contacts\Repositories\Mappers;

use App\Modules\Contacts\ORM\Feedback as FeedbackOrm;
use App\Modules\Contacts\Models\Feedback;
use Illuminate\Support\Facades\Hash;

class FeedbackMapper
{
    public static function mapModelToOrm(Feedback $model): FeedbackOrm
    {
        $orm = new FeedbackOrm();
        $orm->name = $model->name;
        $orm->code = Hash::make(time());
        $orm->email = $model->email;
        $orm->message = $model->message;
        return $orm;
    }
}
