<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = "id";
    protected $fillable = [
        'user_id',
        'batch_id',
        'reg_code',
        'student_code',
        'hall_id',
        'name',
        'dob',
        'blood_group',
        'present_address',
        'permanent_address',
        'guardian_name',
        'guardian_contact',
        'father_name',
        'father_contact',
        'is_active'
];
    public $timestamps = TRUE;

    public function user()
    {
        return $this->hasOne('App\Model\User','id','user_id');
    }
}
