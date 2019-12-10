<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\VoteContent;
use App\Models\Anser;

class VoteController extends Controller
{
    //
    public function allVotes(){
        $votes = Vote::all();
        return $votes;
    }

    public function voteInfo($vote_id){
        \Log::debug($vote_id);
        $vote = VoteContent::find("001000")->answers;
        \Log::debug($vote);
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
