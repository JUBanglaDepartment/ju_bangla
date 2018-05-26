<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $primaryKey = "id";
    protected $fillable = [
        'role_name',
        'role_desc',
        'is_active',
        'is_aactive'
    ];
    public $timestamps = TRUE;

    public function users()
    {
        return $this->hasMany('App\Models\User','role_id','id');
    }
}
