<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    protected $table = 'revenue';
    protected $primaryKey = 'id';
    protected $fillable = [
        'date',
        'revenue'
    ];
}
