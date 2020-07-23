<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Photo
 *
 * @method static Builder|\App\Photo newModelQuery()
 * @method static Builder|\App\Photo newQuery()
 * @method static Builder|\App\Photo query()
 * @mixin \Eloquent
 */
class Photo extends Model
{
    protected $fillable = [
        'album_id',
        'name',
        'title',
        'size',
        'description',
        'main'
    ];
}
