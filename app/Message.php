<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Message
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $subject
 * @property string $message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static Builder|\App\Message newModelQuery()
 * @method static Builder|\App\Message newQuery()
 * @method static Builder|\App\Message query()
 * @method static Builder|\App\Message whereCreatedAt($value)
 * @method static Builder|\App\Message whereEmail($value)
 * @method static Builder|\App\Message whereId($value)
 * @method static Builder|\App\Message whereMessage($value)
 * @method static Builder|\App\Message whereName($value)
 * @method static Builder|\App\Message whereSubject($value)
 * @method static Builder|\App\Message whereUpdatedAt($value)
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
