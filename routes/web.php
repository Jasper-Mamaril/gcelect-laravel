<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
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
    // return view('layout.master');
    return view('welcome');
});

// Route::get('/', function () {
//     return view('components.voting');
//     // return view('auth.login');
// });

Route::group(['namespace' => 'App\Http\Controllers'], function ()
{
    Route::get('/login', 'LoginController@show')->name('login.show');
    Route::post('/login', 'LoginController@login')->name('login.perform');
    // Route::get('/register', 'RegisterController@show')->name('register.show');
    Route::post('/register', 'RegisterController@register')->name('register.perform');
    // Route::get('/login/admin', 'LoginController@showAdmin')->name('login.showAdmin');



    Route::get('/logout', 'LoginController@logout')->name('logout');

    // Route::post('stories/comment', 'CommentController@store')->name('comment.add');
    Route::post('vote/insert', 'VoteController@insert')->name('vote.insert');
    Route::get('get/comment', 'CommentController@index')->name('comment.index');
    // Route::get('favorites', 'FavoriteController@index')->name('favorite.index');
});

// Route::get('members', [App\Http\Controllers\ContentController::class, 'login']);
// Route::get('members', [App\Http\Controllers\MemberController::class, 'voting']);

Route::group(['middleware' => ['auth']], function() {
        // Route for voting page 
    Route::get('partylists/partylists-home', [App\Http\Controllers\PartylistController::class, 'getPartylists']);

    Route::get('candidates/voting', [App\Http\Controllers\CandidateController::class, 'getCandidates']);

    Route::post('/submit-form', [App\Http\Controllers\VoteController::class, 'submitForm'])->name('submit-form');


    Route::get('candidates/candidacy', [App\Http\Controllers\CandidateController::class, 'getFiledCandidacy']);

    Route::get('leaderboards/voting-leaderboards', [App\Http\Controllers\LeaderboardController::class, 'getLeaderboards']);

    Route::get('members/president', [App\Http\Controllers\MemberController::class, 'getPresident']);
    // Route::get('members/VPint', [App\Http\Controllers\MemberController::class, 'getVPinternal']);
    // Route::get('members/VPext', [App\Http\Controllers\MemberController::class, 'getVPexternal']);
    // Route::get('members/secretary', [App\Http\Controllers\MemberController::class, 'getSecretary']);
    // Route::get('members/treasurer', [App\Http\Controllers\MemberController::class, 'getTreasurer']);
    // Route::get('members/auditor', [App\Http\Controllers\MemberController::class, 'getAuditor']);
    // Route::get('members/pio', [App\Http\Controllers\MemberController::class, 'getPio']);
    // Route::get('members/', [App\Http\Controllers\MemberController::class, 'voting']);

    // Route for candidacy application page
    Route::post('apply/', [App\Http\Controllers\PartylistController::class, 'applyPartylist']);

    Route::get('partylists/all', [App\Http\Controllers\PartylistController::class, 'getPartylists']);
});




