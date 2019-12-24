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

//Route::get('/userProfileGet', 'UserProfileController@userProfileGet');

Route::post('login', 'UserController@login');
//Route::post('/logout', 'UserController@logout');
//Route::post('register', 'UserController@register');
Route::resource('/task', 'TaskController');
Route::resource('/category', 'CategoryController');
Route::get('/category/{category}/tasks', 'CategoryController@tasks');
//Route::post('/logout', 'UserController@logout');
Route::get('/userProfileGet', 'UserProfileController@userProfileGet');
Route::post('/userProfileUpdate', 'UserProfileController@userProfileUpdate')->name('updateUserProfile');
Route::group(['middleware' => 'auth:api'], function(){

});

Route::post('/store-study', 'UserInterestController@store_study')->name('store_study');
Route::post('/store-work', 'UserInterestController@store_work')->name('store_work');
Route::post('/store-relocate', 'UserInterestController@store_relocate')->name('store_relocate');
//Route::post('/store-finsup', 'UserInterestController@store_finsup')->name('store_finsup');
Route::get('/get-finsup', 'UserInterestController@get_finsup')->name('get_finsup');
Route::get('/get-study', 'UserInterestController@get_study')->name('get_study');
Route::get('/get-work', 'UserInterestController@get_work')->name('get_work');
Route::get('/get-relocate', 'UserInterestController@get_relocate')->name('get_relocate');
Route::get('/billing', 'DashboardController@billing')->name('billing');
Route::get('/plan-upgrade', 'DashboardController@plan_upgrade')->name('plan_upgrade');

Route::get('/my-profile', 'UserProfileController@my_profile')->name('my_profile');

Route::get('/my-account', 'UserProfileController@my_account')->name('my_account');

//Route::post('/updateAuthUser', 'UserProfileController@updateAuthUser')->name('updateAuthUser');

