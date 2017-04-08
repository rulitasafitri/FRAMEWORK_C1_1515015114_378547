<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dosen_matakuliah extends Model
{
    protected $table = 'dosen_matakuliah'; // model tabel dosen_matakuliah
    protected $fillable = ['dosen_id','matakuliah_id'];
 
 public function dosen()//model pada tabel dosen_matakuliah berrelasi dengan  model dosen untuk menentukan hubungan dengan membuat fungsi dosen pada model dosen_matakuliah
 {
 	return $this->belongsTo(dosen::class);//fungsi dosen memiliki nilai return belongsTo pada class eloquent, model dosen_matakuliah dan dosen berrelasi dengan kardinalitas many to one
}
 
 public function matakuliah()//model pada tabel dosen_matakuliah berrelasi dengan model matakuliah, untuk menentukan hubungan dengan membuat fungsi matakuliah pada dosen_matakuliah
 {
 	return $this->belongsTo(matakuliah::class);// fungsi matakuliah memiliki nilai return bolongsTo pada class eloquent, model dosen_matakuliah dan matakuliah berrelasi dengan kardinalitas many to one
 }   

 public function jadwal_matakuliah()//model pada tabel dosen_matakuliah berrelasi dengan model jadwal_matakuliah, untuk menentuka hubungan relasi dengan membuat fungsi jadwal_matakuliah pada model dosen_matakuliah
 {
 	return $this->hasMany(jadwal_matakuliah::class,'dosen_matakuliah_id');//fungsi jadwal_matakuliah memilikii nilai return hasMany pada class eloquent dengan mengambil dosen matakuliah sebagai primary key, model dosen_matakulia dan model jadwal_matakuliah berrelasi dengan kardinalitas one to many
 }
  public function listDosenDanMatakuliah(){
      $out =[];
      foreach ($this->all() as $dosen_matakuliah){
        $out[$dosen_matakuliah->id] = "{$dosen_matakuliah->dosen->nama_dosen} (matakuliah {$dosen_matakuliah->matakuliah->title})";
      }
      return $out;
    }
}
