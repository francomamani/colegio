<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Calificacion extends Model
{
    use SoftDeletes;
    protected $table = 'calificaciones';
    protected $primaryKey = 'calificacion_id';
    protected $fillable = [
        'asignatura_id',
        'inscripcion_id',
        'bimestre',
        'calificacion_1',
        'calificacion_2',
        'calificacion_3',
        'calificacion_4',
        'nota_final',
    ];
    protected $dates = ['deleted_at'];
    public function asignatura() {
        return $this->belongsTo('App\Asignatura', 'asignatura_id');
    }
    public function inscripcion() {
        return $this->belongsTo('App\Inscripcion', 'inscripcion_id');
    }
}
