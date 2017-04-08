<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
     public function pengguna()// model mahasiswa berrelasi dengan model pengguna, untuk menentukan hubungan relasi dengan membuat fungsi pengguna pada model mahasiswa
    {
        return $this->belongsTo(pengguna::class);// fungsi pengguna memiliki nilai return belongsTo pada class eloquent,model mahasiswa dan model pangguna berrelasi dengan kardinalitas one to one
    }

    protected $table = 'mahasiswa';// model pada tabel mahasiswa
    protected $fillable = ['nama_mahasiswa','nim','alamat_mhs','pengguna_id'];

   
    public function jadwal_matakuliah()//model mahasiswa berrelasi dengan jadwal_matakuliah , untuk menentuka hubungan relasi dengan membuat fungsi jadwal_matakuliah pada model mahasiswa
    {
        return $this->hasMany(jadwal_matakuliah::class,'mahasiswa_id');//fungsi jadwal_matakuliah memiliki nilai return hasManypada class eloquent, model mahasiswa dan model jadwal_matakuliah berrelasi dengan kardinalitas one to many
    }
   public function getUsernameAttribute(){
      return $this->pengguna->username;
    }

    public function listMahasiswaDanNim(){
      $out =[];
      foreach ($this->all() as $mahasiswa){
        $out[$mahasiswa->id] = "{$mahasiswa->nama_mahasiswa} ({$mahasiswa->nim})";
      }
      return $out;
    }
}
