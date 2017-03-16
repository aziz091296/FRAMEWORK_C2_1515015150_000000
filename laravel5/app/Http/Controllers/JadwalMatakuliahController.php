<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

class JadwalMatakuliahController extends Controller
{
     	public function awal()

	{
    	return " Hello dari JadwalMatakuliahController" ;
	}

	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$jadwal_matakuliah = new Jadwal_matakuliah();
		$jadwal_matakuliah->mahasiswa_id ='2';
		$jadwal_matakuliah->ruangan_id ='2';
		$jadwal_matakuliah->dosen_matakuliah_id ='2';
		$jadwal_matakuliah->save();
		return "data JadwalMatakuliah telah di simpan ";
	}
}
