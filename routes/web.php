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

// Front page
Route::get('/', 'WelcomeController@show')->name('welcome');

Auth::routes();

// Members
Route::group(['middleware' => ['auth.user.all']], function() {

    // Index
    Route::get('/user', 'User/DashboardController@show')->name('user.dashboard');

});

// Approved members
Route::group(['middleware' => ['auth.user.approved']], function() {

    // Index
    Route::get('/user/member-list', 'User/MemberListController@show')->name('user.member-list');

});
