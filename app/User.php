<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;

/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static Builder|\App\User newModelQuery()
 * @method static Builder|\App\User newQuery()
 * @method static Builder|\App\User query()
 * @method static Builder|\App\User whereCreatedAt($value)
 * @method static Builder|\App\User whereEmail($value)
 * @method static Builder|\App\User whereEmailVerifiedAt($value)
 * @method static Builder|\App\User whereId($value)
 * @method static Builder|\App\User whereName($value)
 * @method static Builder|\App\User wherePassword($value)
 * @method static Builder|\App\User whereRememberToken($value)
 * @method static Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){

        if($this->role->name == 'administrator' && $this->is_active == 1)
            return true;
        return false;

    }
}
