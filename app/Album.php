<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Album
 *
 * @property-read Collection|Photo[] $photos
 * @property-read int|null $photos_count
 * @method static Builder|\App\Album newModelQuery()
 * @method static Builder|\App\Album newQuery()
 * @method static Builder|\App\Album query()
 * @mixin \Eloquent
 */
class Album extends Model
{
    protected $fillable = [
        'name',
        'description',
        'main'
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    public function main_photo()
    {
        foreach ($this->photos as $photo) {
            if ($photo->main == 1) {
                return '/img/cars/' . $this->id . '/' . $photo->name;
            }
        }

        if ($this->photos->isNotEmpty()) {
            return '/img/cars/' . $this->id . '/' . $this->photos->first()->name;
        }

        return '/img/logo.png';
    }
}
