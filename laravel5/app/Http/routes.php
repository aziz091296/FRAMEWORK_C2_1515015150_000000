<?php




Route::get('pengguna','PenggunaController@awal');
Route::get('pengguna/tambah','PenggunaController@tambah');
Route::get('pengguna/lihat/{pengguna}','PenggunaController@lihat');
Route::post('pengguna/simpan','PenggunaController@simpan');
Route::get('pengguna/edit/{pengguna}','PenggunaController@edit');
Route::post('pengguna/edit/{pengguna}','PenggunaController@update');
Route::get('pengguna/hapus/{pengguna}','PenggunaController@hapus');

/*routing table jadwal_matakuliah*/
Route::get('jadwal_matakuliah','JadwalMatakuliahController@awal');
Route::get('jadwal_matakuliah/tambah','JadwalMatakuliahController@tambah');
Route::get('jadwal_matakuliah/lihat/{jadwal_matakuliah}','JadwalMatakuliahController@lihat');
Route::post('jadwal_matakuliah/simpan','JadwalMatakuliahController@simpan');
Route::get('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalMatakuliahController@edit');
Route::post('jadwal_matakuliah/edit/{jadwal_matakuliah}','JadwalMatakuliahController@update');
Route::get('jadwal_matakuliah/hapus/{jadwal_matakuliah}','JadwalMatakuliahController@hapus');

/*routing table dosen_matakuliah*/
Route::get('dosen_matakuliah','DosenMatakuliahController@awal');
Route::get('dosen_matakuliah/tambah','DosenMatakuliahController@tambah');
Route::get('dosen_matakuliah/lihat/{dosen_matakuliah}','DosenMatakuliahController@lihat');
Route::post('dosen_matakuliah/simpan','DosenMatakuliahController@simpan');
Route::get('dosen_matakuliah/edit/{dosen_matakuliah}','DosenMatakuliahController@edit');
Route::post('dosen_matakuliah/edit/{dosen_matakuliah}','DosenMatakuliahController@update');
Route::get('dosen_matakuliah/hapus/{dosen_matakuliah}','DosenMatakuliahController@hapus');

/*routing table ruangan*/
Route::get('ruangan','RuanganController@awal');
Route::get('ruangan/tambah','RuanganController@tambah');
Route::get('ruangan/lihat/{ruangan}','RuanganController@lihat');
Route::post('ruangan/simpan','RuanganController@simpan');
Route::get('ruangan/edit/{ruangan}','RuanganController@edit');
Route::post('ruangan/edit/{ruangan}','RuanganController@update');
Route::get('ruangan/hapus/{ruangan}','RuanganController@hapus');
/*

/*routing table dosen*/
Route::get('dosen','dosenController@awal');
Route::get('dosen/tambah','dosenController@tambah');
Route::get('dosen/lihat/{dosen}','dosenController@lihat');
Route::post('dosen/simpan','dosenController@simpan');
Route::get('dosen/edit/{dosen}','dosenController@edit');
Route::post('dosen/edit/{dosen}','dosenController@update');
Route::get('dosen/hapus/{dosen}','dosenController@hapus');

/*routing table matakuliah*/
Route::get('matakuliah','matakuliahController@awal');
Route::get('matakuliah/tambah','matakuliahController@tambah');
Route::get('matakuliah/lihat/{matakuliah}','matakuliahController@lihat');
Route::post('matakuliah/simpan','matakuliahController@simpan');
Route::get('matakuliah/edit/{matakuliah}','matakuliahController@edit');
Route::post('matakuliah/edit/{matakuliah}','matakuliahController@update');
Route::get('matakuliah/hapus/{matakuliah}','matakuliahController@hapus');

/*routing table mahasiswa*/
Route::get('mahasiswa','mahasiswaController@awal');
Route::get('mahasiswa/tambah','mahasiswaController@tambah');
Route::get('mahasiswa/lihat/{mahasiswa}','mahasiswaController@lihat');
Route::post('mahasiswa/simpan','mahasiswaController@simpan');
Route::get('mahasiswa/edit/{mahasiswa}','mahasiswaController@edit');
Route::post('mahasiswa/edit/{mahasiswa}','mahasiswaController@update');
Route::get('mahasiswa/hapus/{mahasiswa}','mahasiswaController@hapus');





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



Route::get('/', function () {
    return view('master');
});

