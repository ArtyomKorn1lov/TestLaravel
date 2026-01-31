<?php

namespace App\Core\ORM;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $src
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Picture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Picture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Picture query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Picture whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Picture whereSrc($value)
 * @mixin \Eloquent
 */
class Picture extends Model
{
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'src' => 'string',
        ];
    }
}
