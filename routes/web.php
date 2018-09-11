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
    return view('blog');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('submit', 'HomeController@storepoints');
Route::get('courses', 'HomeController@viewcourses');
Route::get('index', 'HomeController@index1');
Route::get('course/{course}', 'HomeController@course');
Route::get('help', 'HomeController@help');
Route::get('logout', 'HomeController@logout');
Route::post('submitdetails', 'HomeController@storesubjects');
Route::get('clustergroups', 'HomeController@storesubjects');
Route::get('program/{course_id}', 'HomeController@welcomecourses');
