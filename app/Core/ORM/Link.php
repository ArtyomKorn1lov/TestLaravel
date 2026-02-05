<?php

namespace App\Core\ORM;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $url
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Link whereUrl($value)
 * @mixin \Eloquent
 */
class Link extends Model
{
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'url' => 'string',
        ];
    }
}
