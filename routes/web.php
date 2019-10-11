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
Route::group(['middleware' => ['auth']], function() {

    // Index
    Route::get('/user', 'User\DashboardController@show')->name('user.dashboard');

});

// Approved members
Route::group(['middleware' => ['auth.approved']], function() {

    // Index
    Route::get('/user/trainers', 'User\MemberListController@showTrainers')->name('user.trainers');
    Route::get('/user/members', 'User\MemberListController@showMembers')->name('user.members');

    // Profiles
    Route::get('/user/trainers/{trainerId}', 'User\MemberListController@showTrainerProfile')->name('user.trainers.profile');
    Route::get('/user/members/{memberId}', 'User\MemberListController@showMemberProfile')->name('user.members.profile');

    // My details
    Route::get('/user/my-details', 'User\MyDetailsController@show')->name('user.my-details.show');
    Route::get('/user/my-details/edit', 'User\MyDetailsController@edit')->name('user.my-details.edit');
    Route::post('/user/my-details/edit', 'User\MyDetailsController@edit')->name('user.my-details.edit');
    Route::get('/user/my-trainers', 'User\MyTrainersController@show')->name('user.my-trainers.show');
    Route::get('/user/my-trainers/add', 'User\MyTrainersController@add')->name('user.my-trainers.add');
    Route::post('/user/my-trainers/add', 'User\MyTrainersController@add')->name('user.my-trainers.add');
    Route::get('/user/my-trainers/edit/{trainerId}', 'User\MyTrainersController@edit')->name('user.my-trainers.edit');
    Route::post('/user/my-trainers/edit/{trainerId}', 'User\MyTrainersController@edit')->name('user.my-trainers.edit');

    // Maps
    Route::get('/user/maps/pokestops', 'User\MapsController@showPokestops')->name('user.maps.pokestops');

});

// Staff
Route::group(['middleware' => ['auth.staff']], function() {

    // Index
    Route::get('/staff', 'Staff\DashboardController@index')->name('staff.dashboard');

    // Users
    Route::get('/staff/user/list', 'Staff\UserController@showList')->name('staff.user.list')
        ->middleware('check.user.role:'.\App\UserRole::ROLE_USER_MANAGER);

    Route::get('/staff/user/edit/{userId}', 'Staff\UserController@editUser')->name('staff.user.edit')
        ->middleware('check.user.role:'.\App\UserRole::ROLE_USER_MANAGER);

    Route::post('/staff/user/edit/{userId}', 'Staff\UserController@editUser')->name('staff.user.edit')
        ->middleware('check.user.role:'.\App\UserRole::ROLE_USER_MANAGER);

    // Trainers
    Route::get('/staff/trainer/list', 'Staff\TrainerController@showList')->name('staff.trainer.list')
        ->middleware('check.user.role:'.\App\UserRole::ROLE_USER_MANAGER);

    Route::get('/staff/trainer/edit/{trainerId}', 'Staff\TrainerController@editTrainer')->name('staff.trainer.edit')
        ->middleware('check.user.role:'.\App\UserRole::ROLE_USER_MANAGER);

    Route::post('/staff/trainer/edit/{trainerId}', 'Staff\TrainerController@editTrainer')->name('staff.trainer.edit')
        ->middleware('check.user.role:'.\App\UserRole::ROLE_USER_MANAGER);

    // Pokedex management
    Route::get('/staff/pokedex', 'Staff\PokedexController@dashboard')->name('staff.pokedex.dashboard')
        ->middleware('check.user.role:'.\App\UserRole::ROLE_POKEDEX_MANAGER);

});

