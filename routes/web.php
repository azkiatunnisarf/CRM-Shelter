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

Route::get('/call', function () {
    return view('officer.call');
});
Route::get('/visit', function () {
    return view('officer.visit');
});
Route::get('/keluhan', function () {
    return view('officer.keluhan');
});
Route::get('/kontrak', function () {
    return view('officer.kontrak');
});
Route::get('/insertcall', function () {
    return view('officer.insertcall');
});
Route::get('/insertvisit', function () {
    return view('officer.insertvisit');
});
Route::get('/insertkeluhan', function () {
    return view('officer.insertkeluhan');
});
Route::get('/insertkontrak', function () {
    return view('officer.insertkontrak');
});

Auth::routes();

// Route::group(['prefix' => 'admin',  'middleware' => 'is_admin'], function(){
    // {{--------------------------------------- halaman admin ---------------------------------------}}
    // {{--------------------------------------- ------------- ---------------------------------------}}
    Route::get('/home', function () {
        return view('admin.dashboard_admin');
    });
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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/insert_user', 'UserController@insert')->name('insert.user'); //show form insert



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
