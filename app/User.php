<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Relasi dari User ke Role dengan menggunakan id_role.
     *
     * @var array
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'id_role');
    }

    /**
     * Relasi dari User ke Status dengan menggunakan id_status.
     *
     * @var array
     */
    public function Status()
    {
        return $this->belongsTo('App\Status', 'id_status');
    }
}
