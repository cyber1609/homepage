<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Message
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|\App\Models\Message newModelQuery()
 * @method static Builder|\App\Models\Message newQuery()
 * @method static Builder|\App\Models\Message query()
 * @method static Builder|\App\Models\Message whereCreatedAt($value)
 * @method static Builder|\App\Models\Message whereEmail($value)
 * @method static Builder|\App\Models\Message whereId($value)
 * @method static Builder|\App\Models\Message whereMessage($value)
 * @method static Builder|\App\Models\Message whereName($value)
 * @method static Builder|\App\Models\Message whereSubject($value)
 * @method static Builder|\App\Models\Message whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Message extends Model
{
    protected $fillable = [
        'name',
        'email',
        'subject',
        'message'
    ];

}
