<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TipoAsignatura extends Model
{
    use SoftDeletes;
    protected $table = 'tipo_asignaturas';
    protected $primaryKey = 'tipo_asignatura_id';
    protected $fillable = [
        'nombre',
    ];
    protected $dates = ['deleted_at'];

}
