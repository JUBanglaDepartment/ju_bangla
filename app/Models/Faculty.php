<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $table = 'faculties';
    protected $primaryKey = "id";
    protected $fillable = [
        'user_id',
        'teacher_code',
        'name',
        'dob',
        'present_address',
        'permanent_address',
        'is_active'
];
    public $timestamps = TRUE;

    public function user()
    {
        return $this->hasOne('App\Model\User','id','user_id');
    }
}
