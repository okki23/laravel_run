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
Route::get('/datax', function () {
    return view('home');
});
Route::get('/add', function () {
    return view('add');
});

//agama
Route::get('/agama/data','AgamaController@list_data');
Route::get('/agama/add', function () {
    return view('agama_add');
});
Route::post('/agama/save','AgamaController@save');
Route::get('/agama/edit/{id}','AgamaController@edit');
Route::post('/agama/save_edit','AgamaController@save_edit');
Route::get('/agama/delete/{id}','AgamaController@delete');
//agama

//masterpasien
Route::get('/masterpasien/data','MasterPasienController@list_data');
Route::get('/masterpasien/add','MasterPasienController@add');
Route::post('/masterpasien/save','MasterPasienController@save');
Route::get('/masterpasien/edit/{id}','MasterPasienController@edit');
Route::post('/masterpasien/save_edit','MasterPasienController@save_edit');
Route::get('/masterpasien/delete/{id}','MasterPasienController@delete');
//masterpasiens

//login auth
Route::get('/login','MasterPasienController@list_data');
Route::get('/register','MasterPasienController@add');
Route::post('/forgot_pass','MasterPasienController@save');
//login auth

 
// Route::get('/data/{id}', 'CreatesController@namaku');
 
