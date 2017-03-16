<?php
Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('mahasiswa','MahasiswaController@awal');
Route::get('mahasiswa/tambah','MahasiswaController@tambah');
Route::get('dosen-matakuliah','DosenMatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','DosenMatakuliahController@tambah');
Route::get('jadwal_matakuliah','JadwalMatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','JadwalMatakuliahController@tambah');
Route::get('matakuliah','MatakuliahController@awal');
Route::get('matakuliah/tambah','MatakuliahController@tambah');
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('dosen','DosenController@awal');
Route::get('dosen/tambah','DosenController@tambah');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('hello-aziz', function () {
    return view('welcome');
});


Route::auth();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
