<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliah;

class DosenMatakuliahController extends Controller
{
     	public function awal()

	{
    	return " Hello dari DosenMatakuliahController" ;
	}

	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$dosen_matakuliah = new dosen_matakuliah();
		$dosen_matakuliah->dosenn_id ='1';
		$dosen_matakuliah->matakuliah_id ='1';
		$dosen_matakuliah->save();
		return "data dengan DosenMatakuliah telah di simpan ";
	}
}
