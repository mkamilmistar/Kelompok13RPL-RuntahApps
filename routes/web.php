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
    return view('Volunteer.home');
});

Route::get('/logout', 'AuthController@logout');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/login', 'AuthController@login')->name('login');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/volunteer', 'VolunteerController@index');
    Route::post('/volunteer/create', 'VolunteerController@create');
    Route::get('/volunteer/{id}/edit', 'VolunteerController@edit');
    Route::post('/volunteer/{id}/update', 'VolunteerController@update');
    Route::get('/volunteer/{id}/delete', 'VolunteerController@delete');
});
