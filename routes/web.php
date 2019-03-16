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
Route::get('/calendar', function () {
    return view('calendar');
});
Route::get('/start', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('start');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index');

Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

Route::resource('events', 'EventController');
Route::resource('customer', 'CustomerController');
Route::resource('pic', 'PicController');
Route::resource('flight', 'FlightController');
Route::resource('hotel', 'HotelController');

Route::get('eventdata',array('as'=>'eventdata','uses'=>'EventController@eventdata'));
