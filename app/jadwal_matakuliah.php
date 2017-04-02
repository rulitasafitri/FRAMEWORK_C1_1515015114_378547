<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal_matakuliah extends Model
{
    protected $table = 'jadwal_matakuliah'; // model tabel jadwal matakuliah
    // protected $fillable = ['mahasiswa_id','ruangan_id','dosen_matakuliah_id'];

	public function mahasiswa()//model pada tabel jadwal_matakuliah berrelasi dengan  model mahasiswa, untuk menentukan hubungan relasi dengan membuat fungsi matakulaih pada model jadwal_matakuliah
    {
        return $this->belongsTo(Mahasiswa::class);//fungsi mahasiswa memiliki nilai return belongsTo pada class eloquent, model jadwal_matakuliah dan model mahasiswa berrelasi dengankardinalitas many to one
    }
    public function ruangan()//model jadwal matakuliah berrelasi dengan model ruangan, untuk menentuka hubungan relasi dengan membuat fungsi ruangan pada model jadwal_matakuliah.
    {
        return $this->belongsTo(Ruangan::class);//fungsi ruangan memiliki nilai return belongsTo pada class eloquent, model jadwal_matakuliah dan model ruangan berrelasi dengan kardinalitas many to one
    }

    public function dosen_matakuliah()// model jadwal_matakuliah berrelasi dengan dosen_matakuliah, untuk menentukan hubungan relasi dengan membuat fungsi dosen_matakuliah pada model jadwal_matakuliah
    {
        return $this->belongsTo(dosen_matakuliah::class);//fungsi dosen matakuliah memiliki nilai return belongsTo pada class eloquent, model jadwal_matakulia dan dosen_matakuliah berrelasi dengan kardinalitas many to one
    }


}
