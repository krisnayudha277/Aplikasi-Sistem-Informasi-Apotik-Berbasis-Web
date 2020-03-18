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
Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

// Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/ekspor', 'HomeController@export_dataobat')->name('eksporexcel');

Route::post('/home', 'HomeController@import_dataobat')->name('home');

Route::get('/admincrud/data_obat', 'HomeController@cetak_pdf');

 Route::get('password', 'PasswordController@change')->name('password.change');
 Route::put('password', 'PasswordController@update')->name('password.update');

Route::get('/home/admin', 'AdminController@index')->name('admin.index');

Route::get('jenis', 'JenisObatController@index')->name('jenisobat.index');

Route::post('/create', 'HomeController@create');

Route::get('/obat/hapus/{id}', 'HomeController@hapus');

Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/obat/{id}/update', 'HomeController@update');

Route::get('/admincrud/sampah_obat', 'HomeController@trash');

Route::get('/obat/kembalikan/{id}', 'HomeController@kembalikan');

Route::get('/obat/kembalikan_semua', 'HomeController@kembalikan_semua');

Route::get('/obat/hapus_permanen/{id}', 'HomeController@hapus_permanen');

Route::get('/obat/hapus_permanen_semua', 'HomeController@hapus_permanen_semua');

Route::get('/user/index', 'UserController@index');

Route::post('/jenis/create2', 'JenisObatController@create2');

Route::post('/admin/set_admin', 'AdminController@update');

Route::get('/edit_jenis/{id}', 'JenisObatController@edit2');

Route::post('/jenisobat/index/{id}/update', 'JenisObatController@update2');

Route::get('/jenisobat/hapus/{id}', 'JenisObatController@hapus');

Route::get('attendance/{id}', ['as' => 'user.attendance', 'uses' => 'AdminController@attendance']);

Route::get('/admincrud/data_jenis_obat', 'JenisObatController@cetak_pdf');

Route::get('/admincrud/totaldata', 'HomeController@total')->name('total');

// Route::get('/admin/set_admin/{id}', 'AdminController@edit2')->name('admin.set_admin');
// Route::get('/auth/register',function(){
//     $message  = "hello";
//     Mail::send('welcome', ['key' => 'value'], function($message)
//     {

//        $message->from('myEmail@test.com')
//            ->to('iljimae.ic@gmail.com', 'John Smith')
//            ->subject('Welcome!');
//     });
// });