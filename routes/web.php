<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('coba', function () {
//     return view('fakultas.index');
// });
// Route::get('pelatihan1s','Pelatihan1@index');
// Route::get('tambah','Pelatihan1@create');
// Route::post('tambah/store','Pelatihan1@store');
// Route::get('edit/{id}','Pelatihan1@edit');
// Route::post('/edit/update/{id}','Pelatihan1@update');
// Route::get('hapus/{id}','Pelatihan1@destroy');
//Routes::resource('pelatihan1s','Pelatihan1')
Auth::routes();
Route::middleware(['auth'])->group(function(){


	Route::get('/home', 'HomeController@index')->name('home');
	Route::middleware(['Admin'])->group(function(){
		Route::get('admin', 'AdminController@index')->name('admin.index');
		
	});
	Route::middleware(['User'])->group(function(){
		Route::get('user', 'UserController@index')->name('user.index');
		
	});
	Route::get('logout',function(){
		Auth::logout();
		return redirect('/login');
	});

});
//Route::post('register','autenticationController@register')->name('login.register');
//Route::resource('login','autenticationController');

Route::get('index', function () {
    return view('layouts.layout');
});
Route::resource('fakultas','fakController');
Route::resource('jurusan','jurController');
Route::resource('mahasiswa','mhsController');
/////////////////////////
Route::resource('gudang','GudangController');


