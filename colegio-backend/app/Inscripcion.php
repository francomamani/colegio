<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inscripcion extends Model
{
    use SoftDeletes;
    protected $table = 'inscripciones';
    protected $primaryKey = 'inscripcion_id';
    protected $fillable = [
        'paralelo_id',
        'estudiante_id',
        'sin_multas',
        'gestion',
    ];
    protected $dates = ['deleted_at'];
    public function paralelo() {
        return $this->belongsTo('App\Paralelo', 'paralelo_id');
    }
    public function estudiante() {
        return $this->belongsTo('App\Estudiante', 'estudiante_id');
    }
    public function calificacion() {
        return $this->hasOne('App\Calificacion');
    }
}
