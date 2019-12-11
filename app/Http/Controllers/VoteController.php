<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\VoteContent;
use App\Models\Answer;

class VoteController extends Controller
{
    //
    public function allVotes(){
        $votes = Vote::all();
        return $votes;
    }

    public function answerInfo($vote_id){
        // \Log::debug($vote_id);
        $answer = VoteContent::find($vote_id)->answers;
        \Log::debug($answer);
        return $answer;
    }

    public function voteInfo($vote_id){
        // \Log::debug($vote_id);
        $vote = Vote::find($vote_id);
        // \Log::debug($vote);
        return $vote;
    }



    public function makeVote(Request $request){

        // \Log::debug($request->all());

        \Storage::putFileAs('public',$request->file('thumbnail'),$request->vote_id.'.png');
        
        $exists = \Storage::disk('public')->exists($request->vote_id.'.png');

        if($exists){
            $image = \Storage::disk('public')->url($request->vote_id.'.png');
        }else{
            $image = \Storage::disk('public')->url('sample.png');
        }


        Vote::insert([
            "vote_id"=>$request->vote_id,
            "writer"=>$request->writer,
            "title"=>$request->title,
            "context"=>$request->context,
            "img"=>$image,
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
        ]);
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

    // public function voteInfo(Request $request) {
    //     Vote::select([
    //         "vote_id"=>$request->vote_id
    //     ]);
    // }
    
}
