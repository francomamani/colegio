<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comunicado extends Model
{
    use SoftDeletes;
    protected $table = 'comunicados';
    protected $primaryKey = 'comunicado_id';
    protected $fillable = [
        'titulo',
        'contenido',
    ];
    protected $dates = ['deleted_at'];
}
