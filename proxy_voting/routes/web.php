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

Route::get('/', function () {
    $teachers = Teacher::orderBy('name','asc')->get();
    return view('voting', ['teachers'=>$teachers]);
});

Route::post('/vote', function (Request $request){
    //TODO
});


