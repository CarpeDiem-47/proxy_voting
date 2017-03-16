<?php

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

use App\Teacher;
// use Illuminate\Http\Request;
// use App\Http\Requests;
// use Illuminate\Http\Request;

Route::get('/', function () {
    $teachers = Teacher::orderBy('name','asc')->get();
    return view('voting', ['teachers'=>$teachers]);
});

Route::post('/newvote', ['uses' => 'VoteController@store']);



