<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SessionStudents extends Model
{
    protected $table = ' session_students';
    protected $primaryKey = "id";
    protected $fillable = [
        'student_id',
        'course_faculty_id',
        'session_id'
    ];
    public $timestamps = TRUE;
}
