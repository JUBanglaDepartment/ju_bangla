<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marks extends Model
{
    protected $table = 'marks';
    protected $primaryKey = "id";
    protected $fillable = [
        'session_student_id',
        'attendance',
        'tutorial',
        'course_final',
        'extra_grace_marks',
        'total_marks',
        'grade_point',
        'grade'
];
    public $timestamps = TRUE;

    public function user()
    {
        return $this->hasOne('App\Model\User','id','user_id');
    }
}
