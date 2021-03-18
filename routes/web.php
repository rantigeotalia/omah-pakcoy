<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('dashboard', 'DashboardController');

Route::resource('humidity', 'HumidityController');

Route::resource('temperature', 'TemperatureController');

Route::resource('soil', 'SoilController');

Route::resource('light-intencity', 'LightIntencityController');

Route::resource('report', 'ReportController');

Route::resource('device', 'DeviceController');

Route::post('/store-device', 'DeviceController@store')->name('device-store');

Route::get('/edit-device/{id}', 'DeviceController@edit')->name('device-edit');

Route::post('/update-device/{id}', 'DeviceController@update')->name('device-update');

Route::get('/read-sensor', 'ReadSensorController@read')->name('read-sensor');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
