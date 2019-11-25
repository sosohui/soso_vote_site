<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;

class VoteController extends Controller
{
    //
    public function allVotes(){
        $votes = Vote::all();
        return $votes;
    }

    public function makeVote(Request $request){
        $content = [
            'vote_id'=>$request->vote_id,
            'writer'=>$request->writer,
            'title'=>$request->title,
            'context'=>$request->context
        ];
        
        return $content;
    }

    public function makeAnswer(){
        return "라랄라";
    }

    public function detailVote(){
        return "라랄루";
    }

    public function detailResult(){
        return "라랄롤";
    }
    
}
