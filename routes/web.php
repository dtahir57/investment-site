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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    Route::resource('dashboard','AdminCOntroller');
    Route::get('packages', 'PackageController@index')->name('package.index');
    Route::get('packages/create','PackageController@create')->name('package.create');
    Route::get('permissions','PermissionController@index')->name('permission.index');
    Route::get('permissions/create','PermissionController@create')->name('permission.create');
    Route::post('permission/store','PermissionController@store')->name('permission.store');
    Route::get('roles','RoleController@index')->name('role.index');
    Route::get('roles/create','RoleController@create')->name('role.create');
    Route::get('users','UserController@index')->name('user.index');
    Route::get('users/create','UserController@create')->name('user.create');


});