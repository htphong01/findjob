<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use App\Job;

class Candidate extends Model
{
    protected $table = 'candidates';
    protected $primaryKey = 'candidate_id';
    protected $fillable = [
        'candidate_name',
        'candidate_address',
        'candidate_phoneNumber',
        'candidate_image',
        'candidate_cv'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function job() {
        return $this->hasMany(Job::class,'job_id');
    }

    public function candidate_job() {
        return $this->hasMany('App\Candidate_Job', 'candidate_id');
    }
}
