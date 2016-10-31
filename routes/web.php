<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/cursus', 'HomeController@index');

Route::get('/facturen', 'HomeController@index');


Route::get('/admin', [
    'uses' => 'UserController@admin',
    'as' => 'admin',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Content', 'Financieel']
]);

Route::post('/admin/assign-roles', [
    'uses' => 'UserController@postAdminAssignRoles',
    'as' => 'admin.assign',
    'middleware' => 'roles',
    'roles' => ['Admin', 'Content', 'Financieel']
]);


Route::get('layouts/backend/users/confirm', ['as' => 'layouts.backend.users.confirm', 'uses' => 'OptionsController@confirm']);
Route::resource('backend/users/confirm', 'OptionsController', ['exept' => ['show']]);







