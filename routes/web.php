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

Route::get('/', function () {
    return view('newforms');
});

Route::get('/form',function(){
   return view('form');
});

Route::get('/stud',function(){
   return view('studentInsert');
});

Route::get('/login',function(){
   return view('Login');
});

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');

Route::get('insertLogin','LogInController@loginform');
Route::post('loginUser','LogInController@checkUser');
