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
    return view('welcome');
});

Route::get('/abc', function () {
    return 'hi!!! welcome to laravel';
});

Route::get('/abc/{id}/{name}', function ($id,$name) {
    return  'id='.$id.'and name='.$name;
});

Route::get('/common', function () {
    return view('common.common');
});
Route::get('/register', 'pagesController@register' );
Route::post('/user/register', 'pagesController@register_action' );
   
