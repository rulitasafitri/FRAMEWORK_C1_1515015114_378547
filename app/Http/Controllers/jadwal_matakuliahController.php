<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

class jadwal_matakuliahController extends Controller
{
    public function awal()
    {
    	return "Hello dari jadwal_matakuliahController";
    }
    public function tambah()
    {
    	return $this->simpan();
    }
    public function simpan()
    {
    	$jadwal_matakuliah = new jadwal_matakuliah();
    	$jadwal_matakuliah->mahasiswa_id = 1;
    	$jadwal_matakuliah->ruangan_id = 1;
    	$jadwal_matakuliah->dosen_matakuliah_id = 1;
    	$jadwal_matakuliah->save();
    	return "data dengan title_jadwal_matakuliah{$jadwal_matakuliah->mahasiswa_id} telah disimpan";
    }
}

// {
//     public function awal()
// {
//       return view('matakuliah.awal',['data'=>matakuliah::all()]);
//     }

//     public function tambah()

//    {
//       return view('matakuliah.tambah');
//    }
//    public function simpan(Requests $input)
//    {
//     $matakuliah = new matakuliah();
//     $matakuliah->username = $input->username;
//     $matakuliah->username = $input->password;
//     $informasi = $matakuliah->save() ? 'berhasil simpan data' : 'Gagal simpan data';
//     return redirect('matakuliah')->with(['informasi'=>$informasi]);

//    }

//    public function edit($id)
//    {
//     $matakuliah = matakuliah :: find($id);
//     return view('matakuliah.edit')->with(array('matakuliah'=>$matakuliah));
//    }

//    public function lihat($id)
//    {
//     $matakuliah = matakuliah :: find($id);
//     return view('matakuliah.lihat')->with(array('matakuliah'=>$matakuliah));
//    }

//    public function update($id,Requests $input)
//    {
//     $matakuliah = matakuliah ::find($id);
//     $matakuliah->username = $input->username;
//     $matakuliah->username = $input->password;
//     $informasi = $matakuliah->save() ? 'berhasil simpan data' : 'Gagal simpan data';
//     return redirect('matakuliah')->with(['informasi'=>$informasi]);
//    }

//    public function hapus($id)
//    {
//     $matakuliah = matakuliah ::find($id);
//     $informasi = $matakuliah->delete() ? 'berhasil simpan data' : 'Gagal simpan data';
//     return redirect('matakuliah')->with(['informasi'=>$informasi]);
//    }