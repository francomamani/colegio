<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paralelo extends Model
{
    use SoftDeletes;
    protected $table = 'paralelos';
    protected $primaryKey = 'paralelo_id';
    protected $fillable = [
        'profesor_id',
        'curso_id',
        'nombre',
        'aula',
    ];
    protected $dates = ['deleted_at'];
    public function gestion() {
        return $this->belongsTo('App\Gestion');
    }
}
