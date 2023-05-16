<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Course;

use App\Models\Members;
use App\Models\Users;
use App\Models\Partylists;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('api')->get('/classes', function() {
    return "My classes API";
});

Route::prefix('api')->get('/classes', function() {
    return "My classes API";
});

Route::post('course/create', function(Request $request) {

    $course = new Course;
    // $course->name = $request->name;
    // $course->description = $request->description;
    // $course->is_draft = $request->is_draft;
    $course->fill($request->all());
    $course->save();

    return $course;
});


Route::put('/course/{id}', function(Request $request, $id) {

    $course = Course::find($id);
    $course->name = 'Sample Update';
    $course->save();

    return $course;

});

Route::delete('/course/{id}', function($id) {
    
    $course = Course::find($id);
    $course->delete();

    return $course;
});

Route::get('getAccounts', function() {
    // select * from course
    $users = Users::all();
    // table('users')->where('name', 'John')
    // $members = Member::where('members_position', "President")->get();
    return $users;

});

Route::get('getPresident', function() {
    // select * from course
    // $members = Member::all();
    // table('users')->where('name', 'John')
    
    // where('members_position', "President")->
    // $members = Member::where('members_position', "President")->get();
    $members = Members::with('members')-> where('members_position', "President")->get();
    return $members;

});

Route::get('getVPinternal', function() {
    // select * from course
    // $members = Member::all();
    // table('users')->where('name', 'John')
    $members = Members::where('members_position', "VPinternal")->get();
    return $members;

});

Route::get('getVPexternal', function() {
    // select * from course
    // $members = Member::all();
    // table('users')->where('name', 'John')
    $members = Members::where('members_position', "VPexternal")->get();
    return $members;

});