<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{
    use SoftDeletes;
    protected $table = 'videos';
    protected $primaryKey = 'video_id';
    protected $fillable = [
        'url',
        'titulo',
        'descripcion',
    ];
    protected $dates = ['deleted_at'];
    public function asignacionVideos() {
        return $this->hasMany('App\AsignacionVideo');
    }
}
