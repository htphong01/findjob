<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Job_Detail;
use App\Employer;

class Job extends Model
{
    protected $table = 'jobs';
    protected $primaryKey = 'job_id';
    protected $fillable = [
        'job_name',
        'job_slug',
        'job_address',
        'category_id',
        'employer_id',
        'job_total_candidate'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function job_detail() {
        return $this->hasOne(Job_Detail::class);
    }

    public function employer() {
        return $this->belongsTo('App\Employer', 'employer_id');
    }

    public function candidate_job() {
        return $this->hasMany('App\Candidate_Job', 'job_id');
    }

}
