<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //무조건 값을 넣어야 하는 부분
    protected $fillable = [
        'vote_id','writer', 'title', 'context',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function voteContents()
    {
        return $this->hasMany('App\Models\VoteContent');
    }

}
