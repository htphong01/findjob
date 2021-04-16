<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Employer;

class Customer extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customer_id';
    protected $fillable =[
        'customer_username',
        'customer_password',
        'customer_privacy'
    ];

    public function employer() {
        return $this->hasOne(Employer::class, 'employer_id');
    }
}
