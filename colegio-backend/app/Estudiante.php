<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Estudiante extends Model
{
    use SoftDeletes;
    protected $table = 'estudiantes';
    protected $primaryKey = 'estudiante_id';
    protected $fillable = [
        'usuario_id',
        'rude',
        'persona_contacto',
        'celular_contacto',
    ];
    protected $dates = ['deleted_at'];
    public function usuario() {
        return $this->belongsTo('App\Usuario');
    }
}
