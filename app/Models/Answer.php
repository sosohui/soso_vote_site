<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    //
    protected $table = 'answers';
    
    public $timestamps = false;

    protected $primaryKey = 'answer_id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //무조건 값을 넣어야 하는 부분
    protected $fillable = [
        'vote_id', 'vote_content_id','answer' 
    ];

    public function voteContent(){
        return $this->belongsTo('App\Models\VoteContent','vote_content_id','vote_content_id');
    }
    
    public function responders()
    {
        return $this->hasMany('App\Models\Responder','vote_content_id','vote_content_id');
    }
}
