<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Like extends Model
{
    use SoftDeletes;
    protected $table = 'likes';
    protected $primaryKey = 'id';
    protected $fillable = [
        'comment_id',
        'user_id'
    ];
}
