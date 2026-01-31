<?php

namespace App\Modules\Contacts\ORM;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Contacts\Enums\ContactTypes;

/**
 * @property int $id
 * @property string $code
 * @property ContactTypes $type
 * @property string $label
 * @property string $value
 * @property bool $show_footer
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereShowFooter($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Contact whereValue($value)
 * @mixin \Eloquent
 */
class Contact extends Model
{
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'code' => 'string',
            'type' => ContactTypes::class,
            'label' => 'string',
            'value' => 'string',
            'show_footer' => 'boolean',
        ];
    }
}
