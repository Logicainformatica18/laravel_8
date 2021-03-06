<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasFactory, Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'dni','firstname','lastname','names', 'password','datebirth','cellphone','photo','sex', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function roles_()
    {
        //pertenece a muchas roles - agregamos el id de la tabla asociativa - pivot
        return $this->belongsToMany('Spatie\Permission\Models\Role', 'model_has_roles','model_id')->withPivot('model_id','model_type');
    }
    public function roles_one()
    {
        //pertenece a muchas roles - agregamos el id de la tabla asociativa - pivot
        return $this->belongsTo('Spatie\Permission\Models\Role', 'model_has_roles','model_id');
    }
}
