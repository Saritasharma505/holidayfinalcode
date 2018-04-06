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
Route::group(['middleware' => 'web'], function () {
    // Frontend
    Route::auth();

   Route::get('/', 'HomeController@index',function(){
    return view('admin.login');
   });

    Route::resource('posts', 'PostController');

});

Route::get('/',function(){
    return view('auth.login');
   });

Route::get('/role','RolesController@index')->name('index');
Route::post('/role/store','RolesController@store')->name('store');
Route::get('/role/delete-roles/{id}','RolesController@destroy')->name('destroy');
Route::get('/role/edit-role/{id}','RolesController@edit')->name('edit');

Route::get('/member','MembersController@index')->name('index');

Route::get('/location','LocationsController@index')->name('index');
Route::get('/location/delete/{id}','LocationsController@destroy')->name('destroy');
Route::get('/location/edit/{id}','LocationsController@edit')->name('edit');

Route::get('/admin-user','AdminController@index')->name('index');
Route::get('/admin-user/add-admin','AdminController@create')->name('create');
Route::get('/admin-user/edit-admin/{id}','AdminController@edit')->name('edit');
Route::get('/admin-user/delete-admin/{id}','AdminController@destroy')->name('destroy');
Route::post('/admin-user/store-admin','AdminController@store')->name('store');
Route::post('/admin-user/update-admin/','AdminController@update')->name('update');


Route::get('/holiday-request-get-all-details','HolidayController@index')->name('index');

Route::get('/voucher','VoucherController@index')->name('index');
Route::get('/voucher/edit/{id}','VoucherController@edit')->name('edit');
Route::get('/voucher/delete/{id}','VoucherController@destroy')->name('destroy');


Route::get('/chat','ChatController@index')->name('index');

Route::get('/configuration','ConfigurationController@index')->name('index');
Route::get('/configuration/edit/{id}','ConfigurationController@edit')->name('edit');
Route::get('/configuration/del/{id}','ConfigurationController@destroy')->name('destroy');
Route::post('/configuration/update','ConfigurationController@update')->name('update');
//Amc Section
Route::get('/amc','AmcController@index')->name('index');
Route::get('/amc/edit/{id}','AmcController@edit')->name('edit');
Route::get('/amc/add','AmcController@create')->name('create');
Route::get('/amc/del/{id}','AmcController@destroy')->name('destroy');

//Payment Section
Route::get('/payment','PaymentController@index')->name('index');
Route::get('/payment/add','PaymentController@create')->name('create');
Route::get('/payment/edit/{id}','PaymentController@edit')->name('edit');
Route::get('/payment/del/{id}','PaymentController@destroy')->name('destroy');



Auth::routes();



Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
/////////////////
/*login*/

Route::get('login','LoginController@index')->name('login');