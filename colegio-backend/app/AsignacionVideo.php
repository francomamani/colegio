<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsignacionVideo extends Model
{
    use SoftDeletes;
    protected $table = 'asignatura_videos';
    protected $primaryKey = 'asignatura_video_id';
    protected $fillable = [
        'video_id',
        'asignatura_id',
    ];
    protected $dates = ['deleted_at'];
    public function video() {
        return $this->belongsTo('App\Video', 'video_id');
    }
    public function asignatura() {
        return $this->belongsTo('App\Asignatura', 'asignatura_id');
    }
}
