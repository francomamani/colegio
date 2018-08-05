<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Imagen extends Model
{
    use SoftDeletes;
    protected $table = 'imagenes';
    protected $primaryKey = 'imagen_id';
    protected $fillable = [
        'url',
        'descripcion'
    ];
    protected $dates = ['deleted_at'];
}
