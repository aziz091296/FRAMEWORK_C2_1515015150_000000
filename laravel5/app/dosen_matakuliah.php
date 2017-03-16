<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    
    protected $table = 'dosen_matakuliah';
    protected $fillable = ['dosenn_id','matakuliah_id'];
    protected $guarded = ['id'];
}
