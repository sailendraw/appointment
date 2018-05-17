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

Route::get('/','FrontendController@index')->name('/');
Route::get('/aboutUs','FrontendController@aboutUs')->name('aboutUs');
Route::get('/articleShow/{param}', ['as' => 'articleShow', 'uses' => 'FrontendController@articleShow']);
Route::get('/blogShow/{param}', ['as' => 'blogShow', 'uses' => 'FrontendController@blogShow']);
Route::get('/login','PageController@login');
Route::get('/configuration','PageController@site_configuration');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('SaveConfig','SiteConfigController@SaveConfig');
Route::get('/role','PageController@create_user_role');
<<<<<<< HEAD
Route::post('save_role','UserRoleController@save_role');
Route::get('profile','PageController@user_profile');
=======
Route::post('create','RoleController@create');
Route::resource('Doctor','DoctorController');
Route::resource('Patient','PatientController');
Route::resource('article','ArticleController');
Route::resource('blog','BlogController');


>>>>>>> cbdc43c401278142f4e4385e78ff47f3d60ef4ed
