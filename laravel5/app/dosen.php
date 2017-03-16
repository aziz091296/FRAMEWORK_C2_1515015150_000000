<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    
    protected $table = 'dosenn';
    protected $fillable = ['nama','nip','alamat','pengguna_id'];
    protected $guarded = ['id'];
}
