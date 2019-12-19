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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/userProfileGet', 'UserProfileController@userProfileGet');

Route::post('login', 'UserController@login');
//Route::post('/logout', 'UserController@logout');
//Route::post('register', 'UserController@register');
Route::resource('/task', 'TaskController');
Route::resource('/category', 'CategoryController');
Route::get('/category/{category}/tasks', 'CategoryController@tasks');
Route::get('/logout', 'UserController@logout');
Route::get('/userProfileGet', 'UserProfileController@userProfileGet');
Route::group(['middleware' => 'auth:api'], function(){

});


