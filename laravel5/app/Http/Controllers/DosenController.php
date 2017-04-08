<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Dosen;
use App\Pengguna;

class DosenController extends Controller
{

    public function awal()
    {
        //return "Hello dari DosenController";
        return view('dosen.awal',['data'=>Dosen::all()]);
    }

    public function tambah()
    {
        //return $this->simpan();
        return view('dosen.tambah');
    }

    public function simpan(Request $input)
    {
       
        $pengguna = new Pengguna($input->only('username','password'));
        if ($pengguna->save()) {
            $dosen = new Dosen;
            $dosen->nama = $input->nama;
            $dosen->nip = $input->nip;
            $dosen->alamat = $input->alamat;
            if ($pengguna->dosen()->save($dosen)) $this->informasi ='Berhasil Simpan Data';
        }
        return redirect('dosen')->with(['informasi'=>$this->informasi]);
    }

    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }

    public function lihat($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }

    public function update($id, Request $input)
    {
        
        $dosen = Dosen::find($id);
        $dosen->nama = $input->nama;
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        $dosen->save();
       
        if(!is_null($input->username)){
            $pengguna=$dosen->pengguna->fill($input->only('username'));
                if(!empty($input->password)) $pengguna->password = $input->password;
      
                if($pengguna->save()) $this->informasi = 'Berhasil update data';
        }
        else{
            $this->informasi = 'Berhasil simpan data 2';
        }
    
        return redirect('dosen') -> with (['informasi'=>$this->informasi]);
    }

    public function hapus($id)
    {
        $dosen = Dosen::find($id);
        $informasi = $dosen->delete() ? 'Berhasil hapus data' : 'Gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }
}
