<?php
/*File Dosen_matakuliahController.php*/
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\DosenMatakuliah;

class DosenMatakuliahController extends Controller
{
    //
   public function awal(){
		//return "Hello dari DosenMatakuliaController";
		return view('dosen.awal', ['data'=>dosen::all()]);
	}

	public function tambah(){
		//return $this->simpan();
		return view('dosen.tambah');
	}
	public function simpan(Request $input){
		$dosen= new dosen();
		$dosen->username=$input->username;
		$dosen->password=$input->password;
		$informasi = $dosen->save() ? 'Berhasil simpan data' :'Gagal simpan data';
		return redirect('dosen')->with(['informasi'=>$informasi]);
		//$dosen->save();
		//return "data dengan username {$dosen->username} telah disimpan";
	}
	public function edit($id){
		$dosen=dosen::find($id);
		return view('dosen.edit')->with(array('dosen' => $dosen ));
	}
	public function lihat($id){
		$dosen = dosen::find($id);
		return view('dosen.lihat')->with(array('dosen' => $dosen ));	
	}
	public function update($id, Request $input){
		$dosen= dosen::find($id);
		$dosen->nama=$input->nama;
		$dosen->nip=$input->nip;
		$dosen->alamat=$input->alamat;
		$informasi = $dosen->save()?'Berhasil update data' :'Gagal update data';
		return redirect('dosen')->with(['informasi'=>$informasi]);
	}
	public function hapus($id){
		$dosen=dosen::find($id);
		$informasi = $dosen->delete()?'Berhasil hapus data' :'Gagal hapus data';
		return redirect('dosen')->with(['informasi'=>$informasi]);
	}
}
