<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gestion extends Model
{
    use SoftDeletes;
    protected $table = 'gestiones';
    protected $primaryKey = 'gestion_id';
    protected $fillable = [
        'gestion',
        'bimestre'
    ];
    protected $dates = ['deleted_at'];
    public function usuarios() {
        return $this->hasMany('App\Usuario', 'usuario_id');
    }
    public function cursos() {
        return $this->hasMany('App\Curso', 'curso_id');
    }
    /*Eliminacion en cascada, todos sus registros hijo, mueren tambien*/
    public static function boot()
    {
        parent::boot();
        static::deleting(function($padre) {
            $padre->usuarios()->delete();
            $padre->cursos()->delete();
        });
    }
}
