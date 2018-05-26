<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleMenu extends Model
{
    protected $table = 'role_menu';
    protected $primaryKey = "id";
    protected $fillable = [
        'role_id',
        'menu_id',
        'is_active'
    ];
    public $timestamps = TRUE;
}
