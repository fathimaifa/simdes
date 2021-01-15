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
Route::get('/', 'LoginController@showLoginForm')->name('login');
Route::post('login', 'LoginController@login')->name('proceed-login');

Route::middleware(['auth'])->group(function () {

    //dashboard
    Route::get('/dashboard', 'LoginController@dashboard')->name('dashboard');

    //logout
    Route::get('logout', 'LoginController@logout')->name('logout');


    //user
    Route::get('/admin/user', 'UserController@index')->name('user.index');
    Route::get('/admin/user/create', 'UserController@create')->name('user.create');
    Route::get('/admin/user/source', 'UserController@source')->name('user.source');
    Route::get('/admin/user/{id}/edit', 'UserController@edit')->name('user.edit');
    Route::get('/admin/user/{id}/show', 'UserController@show')->name('user.show');
    Route::get('/admin/user/{id}/destroy', 'UserController@destroy')->name('user.destroy');
    Route::post('/admin/user/store', 'UserController@store')->name('user.store');
    Route::post('/admin/user/{id}/update', 'UserController@update')->name('user.update');
    Route::get('/admin/user/change', 'UserController@change')->name('user.change');
    Route::post('/admin/user/updatePassword', 'UserController@updatePassword')->name('user.updatePassword');

    //role
    Route::get('/admin/role', 'RoleController@index')->name('role.index');
    Route::get('/admin/role/create', 'RoleController@create')->name('role.create');
    Route::get('/admin/role/source', 'RoleController@source')->name('role.source');
    Route::get('/admin/role/{id}/edit', 'RoleController@edit')->name('role.edit');
    Route::get('/admin/role/{id}/show', 'RoleController@show')->name('role.show');
    Route::get('/admin/role/{id}/destroy', 'RoleController@destroy')->name('role.destroy');
    Route::post('/admin/role/store', 'RoleController@store')->name('role.store');
    Route::post('/admin/role/{id}/update', 'RoleController@update')->name('role.update');

    //religion
    Route::get('/admin/religion', 'ReligionController@index')->name('religion.index');
    Route::get('/admin/religion/create', 'ReligionController@create')->name('religion.create');
    Route::get('/admin/religion/source', 'ReligionController@source')->name('religion.source');
    Route::get('/admin/religion/{id}/edit', 'ReligionController@edit')->name('religion.edit');
    Route::get('/admin/religion/{id}/show', 'ReligionController@show')->name('religion.show');
    Route::get('/admin/religion/{id}/destroy', 'ReligionController@destroy')->name('religion.destroy');
    Route::post('/admin/religion/store', 'ReligionController@store')->name('religion.store');
    Route::post('/admin/religion/{id}/update', 'ReligionController@update')->name('religion.update');

    //hamlet
    Route::get('/admin/hamlet', 'HamletController@index')->name('hamlet.index');
    Route::get('/admin/hamlet/create', 'HamletController@create')->name('hamlet.create');
    Route::get('/admin/hamlet/source', 'HamletController@source')->name('hamlet.source');
    Route::get('/admin/hamlet/{id}/edit', 'HamletController@edit')->name('hamlet.edit');
    Route::get('/admin/hamlet/{id}/show', 'HamletController@show')->name('hamlet.show');
    Route::get('/admin/hamlet/{id}/destroy', 'HamletController@destroy')->name('hamlet.destroy');
    Route::post('/admin/hamlet/store', 'HamletController@store')->name('hamlet.store');
    Route::post('/admin/hamlet/{id}/update', 'HamletController@update')->name('hamlet.update');

    //civil
    Route::get('/admin/civil', 'CivilController@index')->name('civil.index');
    Route::get('/admin/civil/create', 'CivilController@create')->name('civil.create');
    Route::get('/admin/civil/source', 'CivilController@source')->name('civil.source');
    Route::get('/admin/civil/{id}/edit', 'CivilController@edit')->name('civil.edit');
    Route::get('/admin/civil/{id}/show', 'CivilController@show')->name('civil.show');
    Route::get('/admin/civil/{id}/destroy', 'CivilController@destroy')->name('civil.destroy');
    Route::post('/admin/civil/store', 'CivilController@store')->name('civil.store');
    Route::post('/admin/civil/{id}/update', 'CivilController@update')->name('civil.update');

    //mortality
    Route::get('/admin/mortality', 'MortalityController@index')->name('mortality.index');
    Route::get('/admin/mortality/create', 'MortalityController@create')->name('mortality.create');
    Route::get('/admin/mortality/source', 'MortalityController@source')->name('mortality.source');
    Route::get('/admin/mortality/{id}/edit', 'MortalityController@edit')->name('mortality.edit');
    Route::get('/admin/mortality/{id}/show', 'MortalityController@show')->name('mortality.show');
    Route::get('/admin/mortality/{id}/destroy', 'MortalityController@destroy')->name('mortality.destroy');
    Route::get('/admin/civil/getCivil', 'CivilController@getCivil')->name('civil.getCivil');
    Route::post('/admin/mortality/store', 'MortalityController@store')->name('mortality.store');
    Route::post('/admin/mortality/{id}/update', 'MortalityController@update')->name('mortality.update');

    //product
    Route::get('/admin/product', 'ProductController@index')->name('product.index');
    Route::get('/admin/product/create', 'ProductController@create')->name('product.create');
    Route::get('/admin/product/source', 'ProductController@source')->name('product.source');
    Route::get('/admin/product/{id}/edit', 'ProductController@edit')->name('product.edit');
    Route::get('/admin/product/{id}/show', 'ProductController@show')->name('product.show');
    Route::get('/admin/product/{id}/destroy', 'ProductController@destroy')->name('product.destroy');
    Route::post('/admin/product/store', 'ProductController@store')->name('product.store');
    Route::post('/admin/product/{id}/update', 'ProductController@update')->name('product.update');

    //customer
    Route::get('/admin/customer', 'CustomerController@index')->name('customer.index');
    Route::get('/admin/customer/create', 'CustomerController@create')->name('customer.create');
    Route::get('/admin/customer/source', 'CustomerController@source')->name('customer.source');
    Route::get('/admin/customer/{id}/edit', 'CustomerController@edit')->name('customer.edit');
    Route::get('/admin/customer/{id}/show', 'CustomerController@show')->name('customer.show');
    Route::get('/admin/customer/{id}/destroy', 'CustomerController@destroy')->name('customer.destroy');
    Route::get('/admin/customer/getCustomer', 'CustomerController@getCustomer')->name('customer.getCustomer');
    Route::post('/admin/customer/store', 'CustomerController@store')->name('customer.store');
    Route::post('/admin/customer/{id}/update', 'CustomerController@update')->name('customer.update');

    //transaction
    // Route::get('/admin/transaction','TransactionController@index')->name('transaction.index');
    // Route::get('/admin/transaction/create','TransactionController@create')->name('transaction.create');
    // Route::get('/admin/transaction/history','TransactionController@history')->name('transaction.history');
    // Route::get('/admin/transaction/{status}/source','TransactionController@source')->name('transaction.source');
    // Route::get('/admin/transaction/{id}/edit','TransactionController@edit')->name('transaction.edit');
    // Route::get('/admin/transaction/{id}/print','TransactionController@print')->name('transaction.print');
    // Route::get('/admin/transaction/{id}/show','TransactionController@show')->name('transaction.show');
    // Route::get('/admin/transaction/{id}/destroy','TransactionController@destroy')->name('transaction.destroy');
    // Route::post('/admin/transaction/store','TransactionController@store')->name('transaction.store');
    // Route::post('/admin/transaction/{id}/update','TransactionController@update')->name('transaction.update');
    // Route::post('/admin/transaction/export','TransactionController@export')->name('transaction.export');
    // Route::post('/admin/transaction/export','TransactionController@export')->name('transaction.export');
    // Route::get('/admin/transaction/{id}/complete','TransactionController@complete')->name('transaction.complete');

    Route::get('/admin/transaction/kelahiran', 'TransactionController@kelahiran')->name('transaction.kelahiran');
    Route::get('/admin/transaction/pindah', 'TransactionController@pindah')->name('transaction.pindah');
    Route::post('/admin/transaction/pindah', 'TransactionController@pindahin')->name('transaction.pindahin');

    //setting
    Route::get('/admin/setting', 'SettingController@index')->name('setting.index');
    Route::get('/admin/setting/create', 'SettingController@create')->name('setting.create');
    Route::get('/admin/setting/source', 'SettingController@source')->name('setting.source');
    Route::get('/admin/setting/{id}/edit', 'SettingController@edit')->name('setting.edit');
    Route::get('/admin/setting/{id}/show', 'SettingController@show')->name('setting.show');
    Route::get('/admin/setting/{id}/destroy', 'SettingController@destroy')->name('setting.destroy');
    Route::post('/admin/setting/store', 'SettingController@store')->name('setting.store');
    Route::post('/admin/setting/change', 'SettingController@change')->name('setting.change');
    Route::post('/admin/setting/{id}/update', 'SettingController@update')->name('setting.update');
});
