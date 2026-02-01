<?php

namespace App\Modules\Contacts\Responses;

use App\Modules\Contacts\Models\Contact;

class ContactResponse
{
    /**
     * @param Contact $model
     * @return array
     */
    public static function toArray(Contact $model): array
    {
        return [
            'id' => $model->id,
            'type' => $model->type->value,
            'value' => $model->value,
            'label' => $model->label ?? '',
        ];
    }
}
