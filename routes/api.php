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

Route::post('votes/makeVote', 'VoteController@makeVote');

Route::get('/votes/detailVote', function (Request $request) {
    return "detailVote";
});

Route::get('/votes/detailResult', function (Request $request) {
    return "detailResult";
});