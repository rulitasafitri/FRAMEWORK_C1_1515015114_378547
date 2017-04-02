<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen extends Model
{
    protected $table = 'dosen'; // model pada tabel dosen
    // protected $fillable = ['nama_dosen','nip','alamat','pengguna_id'];

    public function pengguna() // model pada tabel dosen berrelasi dengan  model pengguna untuk menentukan hubungan dengan membuat fungsi pengguna
    {
        return $this->belongsTo(pengguna::class);//fungsi pengguna memiliki nilai return belongsTo pada class eloquent, model dosen dan pengguna berrelasi dengan kardinalitas one to one
    }                                              

    public function dosen_matakuliah()//model pada tabel dosen berrelasi dengan  model dosen_matakuliah untuk menentukan hubungan dengan membuat fungsi dosen_matakuliah
    {
        return $this->hasMany(dosen_matakuliah::class,'dosen_id');//fungsi dosen_matakuliah memiliki nilai return hasMany pada class eloquent dengan menggambi dosen id sebagai primary key, model dosen dan dosen_matakuliah berrelasi dengan kardinalitas one to many
    }
}
