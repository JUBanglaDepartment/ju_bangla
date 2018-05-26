<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseFaculty extends Model
{
    protected $table = 'course_faculty';
    protected $primaryKey = "id";
    protected $fillable = [
        'faculty_id',
        'course_id'
];
    public $timestamps = TRUE;

}
