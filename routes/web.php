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



Auth::routes();


Route::get('/home', 'Admin\AdminController@index')->name('home');
Route::get('/coinbase', 'Admin\CoinbaseController@index');

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
    
    Route::get('packages', 'Admin\PackageController@index')->name('package.index');
    Route::get('packages/create','Admin\PackageController@create')->name('package.create');

    
    Route::get('permissions','UserManagement\PermissionController@index')->name('permission.index');
    Route::get('permissions/create','UserManagement\PermissionController@create')->name('permission.create');
    Route::post('permissions/store','UserManagement\PermissionController@store')->name('permission.store');
    Route::get('permissions/{permission}/edit','UserManagement\PermissionController@edit')->name('permission.edit');
    Route::patch('permissions/update/{permission}','UserManagement\PermissionController@update')->name('permission.update');
    Route::delete('permissions/delete/{permission}','UserManagement\PermissionController@destroy')->name('permission.destroy');
    
    Route::get('roles','UserManagement\RoleController@index')->name('role.index');
    Route::get('roles/create','UserManagement\RoleController@create')->name('role.create');
    Route::post('roles/store','UserManagement\RoleController@store')->name('role.store');
    Route::get('roles/{role}/edit','UserManagement\RoleController@edit')->name('role.edit');
    Route::patch('roles/update/{role}','UserManagement\RoleController@update')->name('role.update');
    Route::delete('roles/delete/{role}','UserManagement\RoleController@destroy')->name('role.destroy');

    Route::get('users','UserManagement\UserController@index')->name('user.index');
    Route::get('users/create','UserManagement\UserController@create')->name('user.create');
    Route::post('users/store','UserManagement\UserController@store')->name('user.store');
    Route::get('users/{user}/edit','UserManagement\UserController@edit')->name('user.edit');
    Route::patch('users/update/{user}','UserManagement\UserController@update')->name('user.update');
    Route::delete('users/delete/{user}','UserManagement\UserController@destroy')->name('user.destroy');

    /**
     * Starting Routes For Subscriptions
     */
    Route::get('subscriptions', 'Admin\SubscriptionController@index')->name('subscription.index');
    /**
     * Ending Routes For Subscription
     */
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/Frontend/home', function () {
        return view('/Frontend/home');
    })->name('user.dashboard');
    Route::post('/package1', 'Admin\CoinbaseController@package1')->name('coinbase.package1');
    Route::post('/package2', 'Admin\CoinbaseController@package2')->name('coinbase.package2');
    Route::post('/package3', 'Admin\CoinbaseController@package3')->name('coinbase.package3');
    Route::post('/package4', 'Admin\CoinbaseController@package4')->name('coinbase.package4');
    Route::post('/package5', 'Admin\CoinbaseController@package5')->name('coinbase.package5');

    Route::get('/user/profile/{id}', 'Frontend\UserController@index')->name('frontend.user.index');
});
   Route::get('/','Frontend\WelcomeController@index')->name('main');
   Route::get('packages','Frontend\FrontendController@packages')->name('packages');
   Route::view('about','Frontend/about')->name('about');
   Route::view('faq','Frontend/faq')->name('faq');
   Route::view('contact','Frontend/contact')->name('contact');
