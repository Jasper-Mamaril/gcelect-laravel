<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\Content;
use App\Models\Note;
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



Route::get('members', [App\Http\Controllers\ContentController::class, 'login']);

Route::get('members', [App\Http\Controllers\ContentController::class, 'index']);

