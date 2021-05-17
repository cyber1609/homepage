<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Album
 *
 * @property-read Collection|Photo[] $photos
 * @property-read int|null $photos_count
 * @method static Builder|\App\Models\Album newModelQuery()
 * @method static Builder|\App\Models\Album newQuery()
 * @method static Builder|\App\Models\Album query()
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
