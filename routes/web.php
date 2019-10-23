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

Route::get('/','HomeController@login')->name('auth.login');

Auth::routes(['register' => false]);

Route::middleware('web')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/greenhouse', 'GreenhouseController@showGreenhouseList')->name('greenhouse.list');

    Route::post('/insertdata', 'SensorController@postSensorData')->name('post.data');

    Route::get('/greenhouse/details/{greenhouse_id}', 'GreenhouseController@showGreenhouseDetails')->name('greenhouse.detail');

    Route::get('/greenhouse/details/{sensor_type}/{sensor_id}', 'SensorController@showSensor')->name('show.sensor');

    Route::get('/manage', 'UserController@showManageUser')->name('show.manage');



});
