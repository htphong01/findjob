<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Customer;
use App\Job;

class Employer extends Model
{
    protected $table = 'employers';
    protected $primaryKey = 'employer_id';
    protected $fillable = [
        'employer_name',
        'employer_address',
        'employer_phoneNumber',
        'employer_description',
        'employer_total_job'
    ];

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function job() {
        return $this->hasMany(Job::class,'job_id');
    }

    public function candidate_job() {
        return $this->hasMany('App\Candidate_Job', 'employer_id');
    }

}
