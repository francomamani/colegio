<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asignatura extends Model
{
    use SoftDeletes;
    protected $table = 'asignaturas';
    protected $primaryKey = 'asignatura_id';
    protected $fillable = [
        'paralelo_id',
        'profesor_id',
        'nombre',
    ];
    protected $dates = ['deleted_at'];
    public function paralelo() {
        return $this->belongsTo('App\Paralelo', 'paralelo_id');
    }
    public function profesor() {
        return $this->belongsTo('App\Profesor', 'profesor_id');
    }
    public function asignacionVideos() {
        return $this->hasMany('App\AsignacionVideo');
    }
    public function horarios() {
        return $this->hasMany('App\Horario');
    }
    public function calificacion() {
        return $this->hasOne('App\Calificacion');
    }

}
