<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ruangan;

class ruanganController extends Controller
{
    public function awal()
    {
    	return "Hello dari ruanganController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$ruangan = new Ruangan();
    	$ruangan->title_ruangan ='407';
    	$ruangan->save();
    	return "data dengan title_ruangan{$ruangan->title_ruangan} telah disimpan";
    }
}
