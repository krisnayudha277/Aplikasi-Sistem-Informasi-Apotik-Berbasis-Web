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
//pasword
 Route::get('password', 'PasswordController@change')->name('password.change');

 Route::put('password', 'PasswordController@update')->name('password.update');



 //home
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/ekspor', 'HomeController@export_dataobat')->name('eksporexcel');

Route::post('/home', 'HomeController@import_dataobat')->name('home');

Route::get('/admincrud/data_obat', 'HomeController@cetak_pdf');

// Route::post('/create', 'HomeController@create');

Route::get('/detail_obat/{id}', 'HomeController@show');

Route::get('/obat/hapus/{id}', 'HomeController@hapus');

Route::get('/edit/{id}', 'HomeController@edit');

Route::post('/obat/{id}/update', 'HomeController@update');

Route::get('/admincrud/sampah_obat', 'HomeController@trash');

Route::get('/obat/kembalikan/{id}', 'HomeController@kembalikan');

Route::get('/obat/kembalikan_semua', 'HomeController@kembalikan_semua');

Route::get('/obat/hapus_permanen/{id}', 'HomeController@hapus_permanen');

Route::get('/obat/hapus_permanen_semua', 'HomeController@hapus_permanen_semua');

Route::get('/admincrud/totaldata', 'HomeController@total')->name('total');

// Route::post('/upload', 'HomeController@uploadFile');

// Route::get('/file', 'HomeController@readFile');

Route::get('/admincrud/tambah_dataobat', 'HomeController@create')->name('obat.create');

Route::post('obat.store', 'HomeController@store')->name('obat.store');





//admin
Route::get('/home/admin', 'AdminController@index')->name('admin.index');

Route::post('/admin/set_admin', 'AdminController@update');

Route::get('attendance/{id}', ['as' => 'user.attendance', 'uses' => 'AdminController@attendance']);

Route::get('/home/ekspor/dataadmin', 'AdminController@export_dataadmin')->name('eksporexcel3');

Route::get('/admincrud/data_admin', 'AdminController@cetak_pdfadmin');



//jenis
Route::get('jenis', 'JenisObatController@index')->name('jenisobat.index');

Route::get('/detail_jenis/{id}', 'JenisObatController@show2');

// Route::post('/jenisobat/index', 'JenisObatController@create2')->name('jenis.create');

Route::get('/edit_jenis/{id}', 'JenisObatController@edit2');

Route::post('/jenisobat/index/{id}/update', 'JenisObatController@update2');

Route::get('/jenisobat/hapus/{id}', 'JenisObatController@hapus')->name('jenis.hapus');

Route::get('/admincrud/data_jenis_obat', 'JenisObatController@cetak_pdf');

Route::get('/home/ekspor/datajenis', 'JenisObatController@export_datajenisobat')->name('eksporexcel2');

Route::post('/home', 'JenisObatController@import_datajenisobat')->name('home2');

Route::get('/admincrud/tambah_datajenosobat', 'JenisObatController@create2')->name('jenisobat.create');

Route::post('jenisobat.store', 'JenisObatController@store2')->name('jenisobat.store');

Route::get('/jenisobat/index', 'JenisObatController@index')->name('jenisobat.index');

Route::post('/jenisobat/index', 'JenisObatController@import_datajenisobat')->name('jenisobat.index');



//suplier
Route::get('/suplier/index', 'SuplierController@index')->name('suplier.index');

Route::get('/admincrud/tambah_datasuplier', 'SuplierController@create')->name('suplier.create');

Route::post('suplier.store', 'SuplierController@store')->name('suplier.store');

Route::get('/suplier/index', 'SuplierController@index')->name('suplier.index');


//user
Route::get('/user/index', 'UserController@index');

Route::post('/admin/setting/{id}/update', 'UserController@update');

Route::get('/admin/setting/{id}', 'UserController@edit');



//event
Route::get('/event/calendar', 'EventController@index')->name('events.index');

// Route::post('/admincrud/event', 'EventController@addEvent')->name('events.add');
// Route::post('/jenis/create2', 'JenisObatController@store2');













// Route::get('/admincrud/totaldata', 'HomeController@chart');
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