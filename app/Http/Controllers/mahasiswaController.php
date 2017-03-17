<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

class mahasiswaController extends Controller
{
     public function awal()
    {
    	return "Hello dari mahasiswaController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$mahasiswa = new mahasiswa();
    	$mahasiswa->nama_mahasiswa ='rulita safitri';
    	$mahasiswa->nim ='1515015114';
    	$mahasiswa->alamat_mhs ='jalan pramuka';
    	$mahasiswa->pengguna_id=1;
    	$mahasiswa->save();
    	return "data dengan title_mahasiswa{$mahasiswa->title_mahasiswa} telah disimpan";
    }
}
