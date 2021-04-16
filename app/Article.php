<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'description',
        'author_id',
        'images'
    ];

    public function user() {
        return $this->belongsTo('App\User', 'author_id');
    }
}
