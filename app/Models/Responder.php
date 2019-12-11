<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responder extends Model
{
    protected $table = 'responders';

    public $timestamps = false;

    protected $primaryKey = 'responder_id';



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //무조건 값을 넣어야 하는 부분
    protected $fillable = [
        'answer_id', 'vote_content_id', 'vote_id', 'responder' 
    ];

    public function answer(){
        return $this->belongsTo('App\Models\VoteContent');
    }

}
