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



Auth::routes(['verify'=>true]);

Route::get('email/verify', 'Auth\VerificationController@show')
->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')
->name('verification.resend');
Route::get('/home', 'Admin\AdminController@index')->name('home');
Route::get('/coinbase', 'Admin\CoinbaseController@index');

Route::group(['prefix' => '/admin', 'middleware' =>['auth','role:Super_User']], function () {
    
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

    Route::get('request','Admin\UserRequestController@index')->name('request.index');
    Route::delete('request/delete/{request}','Admin\UserRequestController@destroy')->name('request.destroy');
    Route::get('request/accept/{request}','Admin\UserRequestController@accept')->name('request.accept');

    Route::get('withdraw','Admin\WithdrawController@index')->name('withdraw.index');
    Route::get('withdraw/accept/{request}','Admin\WithdrawController@accept')->name('withdraw.accept');

    Route::get('client/add','Admin\ClientController@create')->name('client.add');
    Route::post('client/store','Admin\ClientController@store')->name('client.store');
    /**
     * Starting Routes For Subscriptions
     */
    Route::get('subscriptions', 'Admin\SubscriptionController@index')->name('subscription.index');

    Route::get('renew','Admin\RenewPackageController@index')->name('renew.index');
    Route::patch('client/update/{user}','Admin\RenewPackageController@update')->name('client.update');
    
    /**
     * Ending Routes For Subscription
     */
});

Route::group(['middleware' =>['auth','verified']], function () {
    Route::get('/Frontend/home','Frontend\UserController@index')->name('user.dashboard');
    Route::get('/user/profile/{id}', 'Frontend\ProfileController@index')->name('user.profile');
    Route::patch('/user/profile/update/{id}', 'Frontend\ProfileController@update')->name('user.profile.update');
    Route::patch('/upload/{user}','Frontend\UserController@update')->name('user.upload');
    Route::patch('/withdraw/update/{user}/{address}','Frontend\UserController@withdraw')->name('user.withdraw');
    Route::post('message','Frontend\FrontendController@message')->name('message');
});
   
   
   Route::get('/','Frontend\FrontendController@index')->name('main');
   Route::get('packages','Frontend\FrontendController@packages')->name('packages');
   Route::get('contact','Frontend\FrontendController@contact')->name('contact');
   Route::get('about','Frontend\FrontendController@about')->name('about');
   Route::get('privacy','Frontend\FrontendController@privacy')->name('privacy');
   

