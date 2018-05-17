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

Route::get('/', 'PageController@home');
Route::get('/login','PageController@login');
Route::get('/configuration','PageController@site_configuration');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('SaveConfig','SiteConfigController@SaveConfig');
Route::get('/role','PageController@create_user_role');
Route::post('save_role','UserRoleController@save_role');
Route::get('profile','PageController@user_profile');