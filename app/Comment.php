<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use SoftDeletes;
    protected $table = 'comments';
    protected $primaryKey = 'id';
    protected $fillable = [
        'content',
        'user_id',
        'article_id',
        'parent_id'
    ];
}
