<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $table = 'ruangan';//model tabel ruangan
    protected $fillable = ['title'];

    public function jadwal_matakuliah()//model ruangan berrelasi dengan model jadwal_matakuliah, untuk menentukan hubungan relasi dengan membuat fungsi jadwal_matakuliah di model rungan
    {
    	return $this->hasMany(jadwal_matakuliah::class,'ruangan_id');// fungsi jadwal_matakuliah memiliki nilai return hasMnaypada class eloquent, model ruangan dam model jadwal_matakuliah berrelasi dengan kardinalitas one to many
    }	
}
