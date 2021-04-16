<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Job;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_name',
        'category_slug',
        'category_total_job'
    ];

    public function job() {
        return $this->hasMany('App\Job');
    }
    

}
