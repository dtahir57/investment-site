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
    
    return redirect('login');

});

Auth::routes();


Route::get('/home', 'AdminController@index')->name('home');

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    
    Route::get('packages', 'PackageController@index')->name('package.index');
    Route::get('packages/create','PackageController@create')->name('package.create');

    
    Route::get('permissions','PermissionController@index')->name('permission.index');
    Route::get('permissions/create','PermissionController@create')->name('permission.create');
    Route::post('permissions/store','PermissionController@store')->name('permission.store');
    Route::get('permissions/{permission}/edit','PermissionController@edit')->name('permission.edit');
    Route::patch('permissions/update/{permission}','PermissionController@update')->name('permission.update');
    Route::delete('permissions/delete/{permission}','PermissionController@destroy')->name('permission.destroy');
    
    Route::get('roles','RoleController@index')->name('role.index');
    Route::get('roles/create','RoleController@create')->name('role.create');
    Route::post('roles/store','RoleController@store')->name('role.store');
    Route::get('roles/{role}/edit','RoleController@edit')->name('role.edit');
    Route::patch('roles/update/{role}','RoleController@update')->name('role.update');
    Route::delete('roles/delete/{role}','RoleController@destroy')->name('role.destroy');

    Route::get('users','UserController@index')->name('user.index');
    Route::get('users/create','UserController@create')->name('user.create');
    Route::post('users/store','UserController@store')->name('user.store');
    Route::get('users/{user}/edit','UserController@edit')->name('user.edit');
    Route::patch('users/update/{user}','UserController@update')->name('user.update');
    Route::delete('users/delete/{user}','UserController@destroy')->name('user.destroy');


});