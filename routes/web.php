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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('admin');


# Frontend routes
Route::match(['get', 'post'], '', 'FrontendController@home');

Route::match(['get', 'post'], 'about', 'FrontendController@about');

Route::group(['middleware' => 'auth'], function() {

    Route::match(['get', 'post'], 'job_post', 'FrontendController@newPost');

    Route::match(['get', 'post'], 'edit-profile', 'FrontendController@editProfile');

    Route::match(['get', 'post'], 'profile', 'FrontendController@viewProfile');

    Route::get('logout', 'Auth\LoginController@logout');

    Route::match(['get', 'post'], 'jobs', 'FrontendController@jobs');

    Route::match(['get', 'post'], 'applications', 'FrontendController@applications');

    Route::match(['get', 'post'], 'apply/{id}', 'FrontendController@apply');

});