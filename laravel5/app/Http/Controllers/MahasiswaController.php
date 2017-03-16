<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class MahasiswaController extends Controller
{
    	public function awal()

	{
    	return " Hello dari MahasiswaController" ;
	}

	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$mahasiswa = new Mahasiswa();
		$mahasiswa->nama ='Abdul Aziz';
		$mahasiswa->nim ='1515015150';
		$mahasiswa->alamat ='M.yamin';
		$mahasiswa->pengguna_id ='3';
		$mahasiswa->save();
		return "data dengan nama {$mahasiswa->nama} telah di simpan ";
	}
}
