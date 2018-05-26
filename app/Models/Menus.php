<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    protected $table = 'menus';
    protected $primaryKey = "id";
    protected $fillable = [
        'menu_title',
        'menu_url',
        'menu_desc',
        'is_active'
    ];
    public $timestamps = TRUE;
}
