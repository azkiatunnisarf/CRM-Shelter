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
Route::get('/', function () {
    return view('admin.dashboard_admin');
});
Route::get('/officer', function () {
    return view('officer.dashboard_officer');
});

Auth::routes();
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

Route::get('/home', 'HomeController@index')->name('home');
