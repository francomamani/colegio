<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use SoftDeletes;
    protected $table = 'profesores';
    protected $primaryKey = 'profesor_id';
    protected $fillable = [
        'usuario_id',
        'rda',
        'grado_academico',
        'especialidad',
    ];
    protected $dates = ['deleted_at'];
    public function usuario() {
        return $this->hasMany('App\Usuario');
    }
}
