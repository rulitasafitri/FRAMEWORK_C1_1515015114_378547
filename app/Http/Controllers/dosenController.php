<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

class dosenController extends Controller
{
     public function awal()
    {
    	return "Hello dari dosenController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$dosen = new dosen();
    	$dosen->nama_dosen ='Hariyo';
    	$dosen->nip ='23264234';
    	$dosen->alamat ='jalan juanda';
    	$dosen->pengguna_id=1;
    	$dosen->save();
    	return "data dengan title_dosen{$dosen->title_mahasiswa} telah disimpan";
    }
}
