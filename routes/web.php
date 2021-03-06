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
    return view('auth.login');
});
Auth::routes();

Route::group(['prefix' => 'officer_crm',  'middleware' => 'is_officer_crm'], function(){

    Route::get('/home', 'OfficerController@index')->name('dashboard_officer'); //Dashboard Officer

//------- laporan call
    Route::get('/insertcall', 'callController@insert')->name('insert.call'); //show form insert
    Route::get('/call', 'callController@index')->name('index.call');
    Route::post('/store/call', 'callController@store')->name('store.call');
    Route::get('/destroy/call{call_id}','callController@destroy')->name('destroy.call');
    Route::get('/edit/editcall{call_id}','callController@edit')->name('edit.call');
    Route::post('/update/call{call_id}','callController@update')->name('update.call');
    Route::get('/call/exportExcel', 'callController@exportExcel');
    Route::get('/call/monthFilter','callController@monthFilter')->name('monthFilter.call');

    Route::get('/call/customerCode','callController@customerCode')->name('customerCode.call');


//------- laporan visit
    Route::get('/insertvisit', 'VisitController@insert')->name('insert.visit'); //show form insert
    Route::get('/visit', 'VisitController@index')->name('index.visit');
    Route::post('/store/visit', 'VisitController@store')->name('store.visit');
    Route::get('/destroy/visit{visit_id}','VisitController@destroy')->name('destroy.visit');
    Route::get('/edit/editvisit{visit_id}','VisitController@edit')->name('edit.visit');
    Route::post('/update/visit{visit_id}','VisitController@update')->name('update.visit');
    Route::get('/visit/exportExcel','VisitController@exportExcel');

    //------- laporan keluhan
    Route::get('/insertkeluhan', 'KeluhanController@insert')->name('insert.keluhan'); //show form insert
    Route::get('/keluhan', 'KeluhanController@index')->name('index.keluhan');
    Route::post('/store/keluhan', 'KeluhanController@store')->name('store.keluhan');
    Route::get('/destroy/keluhan{id_keluhan}','KeluhanController@destroy')->name('destroy.keluhan');
    Route::get('/edit/editkeluhan{id_keluhan}','KeluhanController@edit')->name('edit.keluhan');
    Route::post('/update/keluhan{id_keluhan}','KeluhanController@update')->name('update.keluhan');
    Route::get('/keluhan/exportExcel','KeluhanController@exportExcel');

    //------- laporan kontrak
    Route::get('/insertkontrak', 'KontrakController@insert')->name('insert.kontrak'); //show form insert
    Route::get('/kontrak', 'KontrakController@index')->name('index.kontrak');
    Route::post('/store/kontrak', 'KontrakController@store')->name('store.kontrak');
    Route::get('/destroy/kontrak{id_kontrak}','KontrakController@destroy')->name('destroy.kontrak');
    Route::get('/edit/editkontrak{id_kontrak}','KontrakController@edit')->name('edit.kontrak');
    Route::post('/update/kontrak{id_kontrak}','KontrakController@update')->name('update.kontrak');
    Route::get('/kontrak/exportExcel','KontrakController@exportExcel');
    Route::get('/closing','KontrakController@akhirKontrak');


});


 //});

Route::group(['prefix' => 'superadmin',  'middleware' => 'is_superadmin'], function(){
    Route::get('/home', 'AdminController@superadmin')->name('home'); //Dashboard 

    //--------- bisnis unit
    Route::get('/insert_bisnis_unit', 'BisnisController@insert')->name('insert.bisnis_unit'); //show form insert
    Route::get('/bisnis_unit', 'BisnisController@index')->name('index.bisnis_unit');
    Route::post('/store/bisnis_unit', 'BisnisController@store')->name('store.bisnis_unit');
    Route::get('/delete/bisnis_unit{id}','BisnisController@delete')->name('delete.bisnis_unit');
    Route::get('/edit/bisnis_unit{id}','BisnisController@edit')->name('edit.bisnis_unit');
    Route::put('/update/bisnis_unit{id}','BisnisController@update')->name('update.bisnis_unit');

    //--------- area
    Route::get('/insert_area', 'AreaController@insert')->name('insert.area'); //show form insert
    Route::get('/area', 'AreaController@index')->name('index.area');
    Route::post('/store/area', 'AreaController@store')->name('store.area');
    Route::get('/delete/area{id}','AreaController@delete')->name('delete.area');
    Route::get('/edit/area{id}','AreaController@edit')->name('edit.area');
    Route::put('/update/area{id}','AreaController@update')->name('update.area');

    // --------- wilayah
    Route::get('/insert_wilayah', 'WilayahController@insert')->name('insert.wilayah'); //show form insert
    Route::get('/wilayah', 'WilayahController@index')->name('index.wilayah');
    Route::post('/store/wilayah', 'WilayahController@store')->name('store.wilayah');
    Route::get('/delete/wilayah{id}','WilayahController@delete')->name('delete.wilayah');
    Route::get('/edit/wilayah{id}','WilayahController@edit')->name('edit.wilayah');
    Route::put('/update/wilayah{id}','WilayahController@update')->name('update.wilayah');
    Route::post('/filter/wilayah', 'WilayahController@filter')->name('filter.wilayah');

    // user
    Route::get('/insert_user', 'UserController@insert')->name('insert.user'); //show form insert
    Route::get('/user', 'UserController@index')->name('index.user');
    Route::post('/store/user', 'UserController@store')->name('store.user');
    Route::get('/delete/user{id}','UserController@delete')->name('delete.user');
    Route::get('/edit/user{id}','UserController@edit')->name('edit.user');
    Route::put('/update/user{id}','UserController@update')->name('update.user');
});

Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function(){

    Route::get('/home', 'AdminController@index')->name('home'); //Dashboard Admin
    
    // customer
    Route::get('/insert_customer', 'CustomerController@insert')->name('insert.user'); //show form insert
    Route::get('/customer', 'CustomerController@index')->name('index.customer');
    Route::post('/store/customer', 'CustomerController@store')->name('store.customer');
    Route::get('/delete/customer{id}','CustomerController@delete')->name('delete.customer');
    Route::get('/edit/customer{id}','CustomerController@edit')->name('edit.customer');
    Route::put('/update/customer{id}','CustomerController@update')->name('update.customer');
});
 
Route::group(['prefix' => 'manager_crm',  'middleware' => 'is_manager_crm'], function(){
    //manager crm
    Route::get('/home', 'ManagerController@index')->name('dashboard_manager'); //Dashboard Admin
    Route::get('/manager_call', 'ManagerController@call')->name('manager_call');
    Route::get('/manager_keluhan', 'ManagerController@keluhan')->name('manager_keluhan');
    Route::get('/manager_visit', 'ManagerController@visit')->name('manager_visit');
    Route::get('/manager_kontrak', 'ManagerController@kontrak')->name('manager_kontrak');
    Route::get('/manager_mou', 'ManagerController@mou')->name('manager_mou');
    Route::get('/manager_customer', 'ManagerController@customer')->name('manager_customer');

});

Route::group(['prefix' => 'direktur',  'middleware' => 'is_manager_non_crm'], function(){
    //noncrm
    Route::get('/homenon', 'NoncrmController@index')->name('dashboard_noncrm'); //Dashboard Admin
    Route::get('/noncrm_kontrak', 'NoncrmController@kontrak')->name('noncrm_kontrak');
    Route::get('/noncrm_mou', 'NoncrmController@mou')->name('noncrm_mou');
    Route::get('/noncrm_customer', 'NoncrmController@customer')->name('noncrm_customer');
});

Route::group(['prefix' => 'direktur',  'middleware' => 'is_direktur'], function(){
    //direktur
    Route::get('/home', 'DirekturController@index')->name('dashboard_direktur'); //Dashboard Admin
    Route::get('/direktur_call', 'DirekturController@call')->name('direktur_call');
    Route::get('/direktur_keluhan', 'DirekturController@keluhan')->name('direktur_keluhan');
    Route::get('/direktur_visit', 'DirekturController@visit')->name('direktur_visit');
    Route::get('/direktur_kontrak', 'DirekturController@kontrak')->name('direktur_kontrak');
    Route::get('/direktur_mou', 'DirekturController@mou')->name('direktur_mou');
    Route::get('/direktur_customer', 'DirekturController@customer')->name('direktur_customer');
});

Route::group(['prefix' => 'manager_non_crm',  'middleware' => 'is_manager_non_crm'], function(){
    //manager crm
    Route::get('/home', 'ManagerNonCrmController@index')->name('dashboard_manager_non_crm'); //Dashboard Admin
    Route::get('/manager_non_crm_kontrak', 'ManagerNonCrmController@kontrak')->name('manager_non_crm_kontrak');
    Route::get('/manager_non_crm_mou', 'ManagerNonCrmController@mou')->name('manager_non_crm_mou');
    Route::get('/manager_non_crm_customer', 'ManagerNonCrmController@customer')->name('manager_non_crm_customer');

});