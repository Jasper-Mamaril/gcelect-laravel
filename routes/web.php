<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Http\Controllers\PartylistController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\VoteController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\UserController;
use App\Models\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers'], function ()
{
    // login (pushing '/' instead of '/login')
    Route::get('/', 'LoginController@show')->name('login.show');
    Route::post('/', 'LoginController@login')->name('login.perform');

    Route::get('/logout', 'LoginController@logout')->name('logout');

    Route::post('vote/insert', 'VoteController@insert')->name('vote.insert');
    Route::get('get/comment', 'CommentController@index')->name('comment.index');

    // register account
    Route::post('/register', 'RegisterController@register')->name('register.perform');
    Route::post('/registerPartylist', 'RegisterController@registerPartylist')->name('registerPartylist.perform');

    Route::patch('/update/status/{approved}', 'PartylistController@updateStatus')->name('change.status');
     // uses AJAX for leaderboards
     Route::get('/leaderboard/{positionId}', 'LeaderboardController@getChartData')->name('chart.data');
    // Route::get('users/voting', 'CandidateController@getCandidates')->name('user.voting');
    // Route::get('users/voting', 'VoteController@getVotelist')->name('user.voting');
});

Route::group(['middleware' => ['auth']], function() {
    // users pages
    Route::get('users/user-home', [App\Http\Controllers\PartylistController::class, 'getPartylists']);
    // partylist modal
   
    Route::get('users/voting', [App\Http\Controllers\CandidateController::class, 'getCandidates']);
    Route::get('users/votingList', [App\Http\Controllers\VoteController::class, 'getVotelist']);
        // vote submit
    Route::post('/vote-form', [App\Http\Controllers\VoteController::class, 'voteForm'])->name('vote-form');
    Route::get('users/leaderboards', [App\Http\Controllers\LeaderboardController::class, 'getLeaderboards']);

    // admin pages
    Route::get('admin/admin-home', [App\Http\Controllers\PartylistController::class, 'getApproved'])->name('admin.admin-home');
    // Route::get('admin/admin-home', [App\Http\Controllers\CandidateController::class, 'getPartylistDetails']);
    Route::get('admin/for-verification', [App\Http\Controllers\PartylistController::class, 'getforVerification']);
    Route::get('admin/declined', [App\Http\Controllers\PartylistController::class, 'getDeclined']);
    Route::get('admin/leaderboards', [App\Http\Controllers\LeaderboardController::class, 'getAdminLeaderboards']);
    Route::get('admin/users-listing', [App\Http\Controllers\UserController::class, 'getAllVoters']);
    // Route::get('admin/for-verification', [App\Http\Controllers\PartylistController::class, 'getApproved']);

    // partylist page(new)
    Route::get('partylist/partylists-home', [App\Http\Controllers\PartylistController::class, 'insertCandidates']);
    Route::get('partylist/partylists-candidates', [App\Http\Controllers\CandidateController::class, 'getPartylistCandidates']);
    Route::post('/submit-form', [App\Http\Controllers\PartylistController::class, 'submitForm'])->name('submit-form');

    // uses AJAX --MUST BE AT THE BOTTOM
    Route::get('/partylist/{id}', [App\Http\Controllers\PartylistController::class, 'getPartylistDetails'])->name('partylist.details');
    Route::post('/partylists/archive', [App\Http\Controllers\PartylistController::class, 'decline']);

   
});




