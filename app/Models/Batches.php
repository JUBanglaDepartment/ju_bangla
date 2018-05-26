<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batches extends Model
{
    protected $table = 'batches';
    protected $primaryKey = "id";
    protected $fillable = [
        'batch_code',
        'batch_title',
        'year',
        'batch_desc',
        'is_last_batch',
        'is_current_batch'
    ];
    public $timestamps = TRUE;
}
