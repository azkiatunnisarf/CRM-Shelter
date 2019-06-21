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

// sementara . belum tak sambungin auth

Route::get('/officer', function () {
    return view('officer.dashboard_officer');
});

//------- laporan call
    Route::get('/insertcall', 'callController@insert')->name('insert.call'); //show form insert
    Route::get('/call', 'callController@index')->name('index.call');
    Route::post('/store/call', 'callController@store')->name('store.call');
    Route::get('/destroy/call{call_id}','callController@destroy')->name('destroy.call');
    Route::get('/edit/editcall{call_id}','callController@edit')->name('edit.call');
    Route::put('/update/call{call_id}','callController@update')->name('update.call');

//------- laporan visit
Route::get('/insertvisit', 'VisitController@insert')->name('insert.visit'); //show form insert
Route::get('/visit', 'VisitController@index')->name('index.visit');
Route::post('/store/visit', 'VisitController@store')->name('store.visit');
Route::get('/destroy/visit{visit_id}','VisitController@destroy')->name('destroy.visit');
Route::get('/edit/editvisit{visit_id}','VisitController@edit')->name('edit.visit');
Route::put('/update/visit{visit_id}','VisitController@update')->name('update.visit');

//------- laporan keluhan
Route::get('/insertkeluhan', 'KeluhanController@insert')->name('insert.keluhan'); //show form insert
Route::get('/keluhan', 'KeluhanController@index')->name('index.keluhan');
Route::post('/store/keluhan', 'KeluhanController@store')->name('store.keluhan');
Route::get('/destroy/keluhan{id_keluhan}','KeluhanController@destroy')->name('destroy.keluhan');
Route::get('/edit/editkeluhan{id_keluhan}','KeluhanController@edit')->name('edit.keluhan');
Route::put('/update/keluhan{id_keluhan}','KeluhanController@update')->name('update.keluhan');

//------- laporan kontrak
Route::get('/insertkontrak', 'KontrakController@insert')->name('insert.kontrak'); //show form insert
Route::get('/kontrak', 'KontrakController@index')->name('index.kontrak');
Route::post('/store/kontrak', 'KontrakController@store')->name('store.kontrak');
Route::get('/destroy/kontrak{id_kontrak}','KontrakController@destroy')->name('destroy.kontrak');
Route::get('/edit/editkontrak{id_kontrak}','KontrakController@edit')->name('edit.kontrak');
Route::put('/update/kontrak{id_kontrak}','KontrakController@update')->name('update.kontrak');


Auth::routes();

// Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function(){
    // {{--------------------------------------- halaman admin ---------------------------------------}}
    // {{--------------------------------------- ------------- ---------------------------------------}}
    Route::get('/manager_crm', function () {
        return view('/manager_crm/dashboard_manager_crm');
    });
    Route::get('/home', 'AdminController@index')->name('home'); //Dashboard Admin
    

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

    // user
    Route::get('/insert_user', 'UserController@insert')->name('insert.user'); //show form insert
    Route::get('/user', 'UserController@index')->name('index.user');
    Route::post('/store/user', 'UserController@store')->name('store.user');
    Route::get('/delete/user{id}','UserController@delete')->name('delete.user');
    Route::get('/edit/user{id}','UserController@edit')->name('edit.user');
    Route::put('/update/user{id}','UserController@update')->name('update.user');


