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
    return view('layout.master');
    // return view('auth.login');
});

// Route::get('/', function () {
//     return view('components.voting');
//     // return view('auth.login');
// });



// Route::get('members', [App\Http\Controllers\ContentController::class, 'login']);
// Route::get('members', [App\Http\Controllers\MemberController::class, 'voting']);

// Route for voting page 
Route::get('partylists/all', [App\Http\Controllers\PartylistController::class, 'getPartylists']);

Route::get('candidate/voting', [App\Http\Controllers\CandidateController::class, 'getCandidates']);

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
