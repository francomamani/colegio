<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    protected $table = 'gestiones';
    protected $primaryKey = 'gestion_id';
    protected $fillable = [
        'gestion',
        'bimestre'
    ];
    public function usuarios() {
        return $this->hasMany('App\Usuario');
    }
    public function cursos() {
        return $this->hasMany('App\Curso');
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
