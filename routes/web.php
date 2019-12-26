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


Route::get('/about', function () {
    return view('about');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/visa-list', function () {
    return view('visa-list');
});

Route::get('/visa-detail', function () {
    return view('visa-detail');
});

Route::get('/country-list', function () {
    return view('country-list');
});

Route::get('/country-detail', function () {
    return view('country-detail');
});

Route::get('/school-list', function () {
    return view('school-list');
});

Route::get('/school-detail/{school}', function ($school) {
    if(!$school){
        abort(404, 'sorry, we didnt get that school');
    }

    return view('school-detail', ['school'=> $school]);
});



Route::get('/course-detail', function () {
    return view('course-detail');
});
Route::get('/articles', 'ArticlesController@index') ;
Route::get('/articles/{article}', 'ArticlesController@show') ;

Route::post('/user/avatar', 'UserAvatarController@store');
Route::get('/user/avatar', 'UserAvatarController@getit');
Route::get('/user/destroy', 'UserProfileController@destroy');



Route::get('/get-study', 'UserStudyController@get_study')->name('get_study');
Route::post('/store-study', 'UserStudyController@store')->name('store_study');

Route::get('/get-work', 'UserWorkController@get_work')->name('get_work');
Route::post('/store-work', 'UserWorkController@store')->name('get_work');



Route::get('/get-work-exp', 'UserWorkExperienceController@getWorkExp')->name('get_work_exp');
Route::post('/store-work-exp', 'UserWorkExperienceController@store')->name('store_work_exp');

Route::post('/store-dependant', 'UserDependantsController@store')->name('store_dependants');
Route::get('/get-dependent', 'UserDependantsController@get_dependents')->name('get_dependents');


Route::get('/userProfileGet', 'UserProfileController@userProfileGet');
Route::post('/userProfileUpdate', 'UserProfileController@userProfileUpdate')->name('updateUserProfile');

Route::post('/store-finsup', 'UserFinancialPlanController@store')->name('store_finsup');
Route::get('/get-finsup', 'UserFinancialPlanController@get_finsup')->name('get_finsup');

Route::post('/store-countries-visited', 'UserVisitedCountries@store')->name('store_countries_visited');
Route::get('/get-countries-visited', 'UserVisitedCountries@get_countries')->name('get_countries_visited');




Route::post('reset_password_without_token', 'UserController@validatePasswordRequest');
Route::post('reset_password_with_token', 'UserController@resetPassword');

Route::get('/firsttime/{user}', 'ChangePasswordController@index')->name('firstimelogin');
//Route::post('/newsletter', 'UserController@newsletter');
Route::post('/newsletter', 'MailController@newsletter')->name('newsletter');
Route::post('/contact', 'MailController@contact')->name('contact');

Route::get('/threads', 'ThreadsController@index')->name('index');
Route::get('/threads/{thread}', 'ThreadsController@show')->name('show');

Route::get('/testimonials', 'UserTestimonialController@index');
Route::get('/testimonials/{testimonial}', 'UserTestimonialController@index');
Auth::routes(['verify' => true]);
Route::get('/', 'HomeController@index')->name('home');
Route::get('/dashboard', 'SinglePageController@index')->where('any', '.*')->name('dashboard');
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');


//Route::post('/userProfileUpdate', 'UserProfileController@userProfileUpdate')->name('updateUserProfile');
