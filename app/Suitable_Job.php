<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suitable_Job extends Model
{
    protected $table = 'suitable_jobs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'candidate_id',
        'category_id'
    ];
}
