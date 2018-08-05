<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permiso extends Model
{
    use SoftDeletes;
    protected $table = 'permisos';
    protected $primaryKey = 'permiso_id';
    protected $fillable = [
        'estudiante_id',
        'motivo',
        'desde',
        'hasta',
        'solicitante',
        'habilitado',
    ];
    protected $dates = ['deleted_at'];
    public function estudiante() {
        return $this->belongsTo('App\Estudiante', 'estudiante_id');
    }
}
