<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('votes/allVotes', 'VoteController@allVotes');

Route::get('votes/voteInfo/{vote_id}', 'VoteController@voteInfo');

Route::get('votes/answerInfo/{vote_id}', 'VoteController@answerInfo');

Route::post('votes/checkVote', 'VoteController@checkVote');

Route::post('votes/addAnswer', 'VoteController@addAnswer');

Route::post('votes/makeVote', 'VoteController@makeVote');

Route::get('/votes/detailVote', function (Request $request) {
    return "detailVote";
});

Route::get('/votes/detailResult', function (Request $request) {
    return "detailResult";
});