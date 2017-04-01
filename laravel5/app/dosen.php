<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    
    protected $table = 'dosenn';
      protected $fillable=['nama','nip','alamat','pengguna_id'];
    protected $guarded=['id'];

    public function pengguna()
    {
    	# code...
    	return $this->belongsTo(Pengguna::class);
    }
    public function dosen_matakuliah()
    {
    	# code...
    	return $this->hasMany(DosenMatakuliah::class,'dosen_id');
    }


}
