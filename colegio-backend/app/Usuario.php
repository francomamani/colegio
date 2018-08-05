<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $primaryKey = 'usuario_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gestion_id',
        'cuenta',
        'password',
        'nombres',
        'apellidos',
        'cedula',
        'direccion',
        'celular',
        'tipo_usuario',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = ['deleted_at'];

    public function gestion() {
        return $this->belongsTo('App\Gestion', 'gestion_id');
    }
}
