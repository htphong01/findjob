<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job_Detail extends Model
{
    protected $table = 'job_details';
    protected $primaryKey = 'job_id';
    protected $fillable = [
        'job_id',
        'job_description',
        'job_require',
        'job_benefit',
        'job_deadline',
        'job_salary'
    ];

    public function job() {
        return $this->belongsTo(Category::class);
    }
}
