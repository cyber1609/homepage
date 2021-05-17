<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Photo
 *
 * @method static Builder|\App\Models\Photo newModelQuery()
 * @method static Builder|\App\Models\Photo newQuery()
 * @method static Builder|\App\Models\Photo query()
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
