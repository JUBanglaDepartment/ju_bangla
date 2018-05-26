<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $primaryKey = "id";
    protected $fillable = [
        'course_code',
        'session',
        'course_title',
        'course_category',
        'course_credit',
        'course_desc',
        'is_active'
    ];
    public $timestamps = TRUE;
}
