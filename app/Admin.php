<?php
/**
 * Created by PhpStorm.
 * User: wilson
 * Date: 07/07/17
 * Time: 2:57 PM
 */

namespace App;


use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
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

    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }
}
