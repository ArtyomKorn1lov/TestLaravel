<?php

namespace App\Modules\News\ORM;

use App\Core\ORM\Link;
use App\Core\ORM\Picture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $description
 * @property int $picture_id
 * @property int $link_id
 * @property-read Link|null $link
 * @property-read Picture|null $picture
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereLinkId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|News wherePictureId($value)
 * @mixin \Eloquent
 */
class News extends Model
{
    public $timestamps = false;

    protected function casts(): array
    {
        return [
            'id' => 'integer',
            'code' => 'string',
            'name' => 'string',
            'description' => 'string',
            'picture_id' => 'integer',
            'link_id' => 'integer',
        ];
    }

    public function picture(): BelongsTo
    {
        return $this->belongsTo(Picture::class);
    }

    public function link(): BelongsTo
    {
        return $this->belongsTo(Link::class);
    }
}
