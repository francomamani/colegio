<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use SoftDeletes;
    protected $table = 'cursos';
    protected $primaryKey = 'curso_id';
    protected $fillable = [
        'gestion_id',
        'nombre'
    ];
    protected $dates = ['deleted_at'];
    public function gestion() {
        return $this->belongsTo('App\Gestion', 'gestion_id');
    }
    public function paralelos() {
        return $this->hasMany('App\Paralelo');
    }
}
