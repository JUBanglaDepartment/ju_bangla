<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    protected $primaryKey = "id";
    protected $fillable = [
        'username',
        'password',
        'role_id',
        'is_aactive'
    ];
    public $timestamps = TRUE;

    public function role()
    {
        return $this->hasOne('App\Models\Role','id','role_id');
    }

    public function faculty()
    {
        return $this->hasOne('App\Models\Faculty','user_id','id');
    }

    public function checkIfUserHasRole($need_role)
    {
        return (strtolower($need_role)==strtolower($this->role->name)) ? true : null;
    }

    public function hasRole($roles)
    {
        if(is_array($roles))
        {
            foreach($roles as $need_role)
            {
                if($this->checkIfUserHasRole($need_role))
                {
                    return true;
                }
            }
        }
        else{
            return $this->checkIfUserHasRole($roles);
        }
        return false;
    }
}
