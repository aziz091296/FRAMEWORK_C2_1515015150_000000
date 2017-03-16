<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class DosenController extends Controller
{
     	public function awal()

	{
    	return " Hello dari DosenController" ;
	}

	public function tambah()
	{
		return $this -> simpan();
	}
	public function simpan()
	{
		$dosen = new Dosen();
		$dosen->nama ='ikbal';
		$dosen->nip ='1515015149';
		$dosen->pengguna_id ='1';
		$dosen->save();
		return "data dengan dosen {$dosen->nama} telah di simpan ";
	}
}
