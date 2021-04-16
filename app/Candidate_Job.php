<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Candidate_Job extends Model
{
    use SoftDeletes;

    protected $table = 'candidate_jobs';
    protected $primaryKey = 'id';
    protected $fillable = [
        'candidate_id',
        'job_id',
        'employer_id',
        'isApproved'
    ];

    protected $dates = ['deleted_at'];

    public function candidate() {
        return $this->belongsTo('App\Candidate', 'candidate_id');
    }

    public function employer() {
        return $this->belongsTo('App\Employer', 'employer_id');
    }

    public function job() {
        return  $this->belongsTo('App\Job', 'job_id');
    }


}
