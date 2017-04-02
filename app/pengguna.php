<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pengguna extends Model
{
    protected $table = 'pengguna';// model tabel pengguna
    // protected $fillable = ['username','password'];

    public function mahasiswa()//model pengguna berrelasi dengan model mahasiswa, untuk menentukan hubungan relasi dengan membuat fungsi mahasiswa
    {
    	return $this->hasOne(mahasiswa::class,'pengguna_id');//fungsi mahahsiswa memiliki nilai return hasOne pada class eloquent dengan menggambil pengguna_id sebagai primary key, model pengguna dan model mahasiswa berrelasi dengan kardinalitas one to one
    }

    public function dosen()//model pengguna berrelasi dengan model dosen, untuk menentukan hubungan relasi dengan membuat fungsi dosen di model pengguna
    {
    	return $this->hasOne(dosen::class,'pengguna_id');//fungsi dosen memiliki nilai return hasOne pada class eloquent dengan menggambil pengguna_id sebagai primary key, model pengguna dan model dosen berrelasi dengan kardinalitas one to one
    }
}
