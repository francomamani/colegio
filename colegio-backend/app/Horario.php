<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use SoftDeletes;
    protected $table = 'horarios';
    protected $primaryKey = 'horario_id';
    protected $fillable = [
        'asignatura_id',
        'desde',
        'hasta',
        'dia',
    ];
    protected $dates = ['deleted_at'];
    public function asignatura() {
        return $this->belongsTo('App\Asignatura', 'asignatura_id');
    }
}
