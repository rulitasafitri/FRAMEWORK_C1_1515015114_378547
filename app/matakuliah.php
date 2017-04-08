<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';// model tabel matakuliah
    protected $fillable = ['title_matakuliah','keterangan_matakuliah'];


// public function pengguna()
// {
// 	return $this->belongsTo(pengguna::class);
// }

public function dosen_matakuliah()// model matakuliah berrelasi dengan model dosen_matakuliah, untuk menentuka hubungan relasi dengan membuat fungsi pengguna di model matakuliah
{
	return $this->hasMany(dosen_matakuliah::class,'matakuliah_id');// fungsi dosen_matalkuliah memiliki nilai return belongsTo pada class eloquent, model matakuliah dan model dosen_matakuliah berrelasi dengan kardinalitas one to many 
}
public function listMatakuliahdanDosen(){
      $out =[];
      foreach ($this->all() as $matakuliah){
        $out[$matakuliah->id] = "{$matakuliah->title}";
      }
      return $out;
    }
}
