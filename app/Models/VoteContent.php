<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VoteContent extends Model
{
    //
    protected $table = 'vote_contents';

    public $timestamps = false;

    protected $primaryKey = 'vote_id';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //무조건 값을 넣어야 하는 부분
    protected $fillable = [
        'vote_id', 'question', 
    ];

    public function vote(){
        return $this->belongsTo('App\Models\Vote','vote_id','vote_id');
    }

    public function answers()
    {
        return $this->hasMany('App\Models\Answer','vote_content_id','vote_content_id');
    }

}
