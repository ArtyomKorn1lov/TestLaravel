<?php

namespace App\Modules\News\ORM;

use App\Core\ORM\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $picture_id
 * @property bool $is_primary
 * @property-read Picture|null $picture
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereIsPrimary($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Project wherePictureId($value)
 * @mixin \Eloquent
 */
class Project extends Model
{
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'code' => 'string',
            'name' => 'string',
            'picture_id' => 'integer',
            'is_primary' => 'boolean',
        ];
    }

    public function picture(): BelongsTo
    {
        return $this->belongsTo(Picture::class);
    }
}
