<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

use App\pengguna;

class dosenController extends Controller
// {
//      public function awal()
//     {
//     	return "Hello dari dosenController";
//     }
//     public function tambah()
//     {
//     	return $this->simpan();
//     }
//     public function simpan()
//     {
//     	$dosen = new dosen();
//     	$dosen->nama_dosen ='Hariyo';
//     	$dosen->nip ='23264234';
//     	$dosen->alamat ='jalan juanda';
//     	$dosen->pengguna_id=1;
//     	$dosen->save();
//     	return "data dengan title_dosen{$dosen->title_dosen} telah disimpan";
//     }


// }

{
    //
    public function awal()
    {
      
        return view('dosen.awal', ['data'=>dosen::all()]);
    }
    public function tambah()
    {
      
        return view('dosen.tambah');
    }
    public function simpan(Request $input)
    {
        $dosen = new dosen();
        $dosen->nama_dosen = $input->nama_dosen;
        $dosen->nip = $input->nim;
        $dosen->alamat = $input->alamat;
        $informasi = $dosen->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('dosen')->with(['infromasi'=>$informasi]);
    }
     public function edit($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.edit')->with(array('dosen'=>$dosen));
    }
    public function lihat($id)
    {
        $dosen = dosen::find($id);
        return view('dosen.lihat')->with(array('dosen'=>$dosen));
    }
    public function update($id, Request $input)
    {
        $dosen = dosen::find($id);
        $dosen->nama_dosen = $input->nama_dosen;
        $dosen->nim = $input->nim;
        $dosen->alamat = $input->alamat;
        $informasi = $dosen->save()? 'berhasil update data' : 'gagal update data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $dosen = dosen::find($id);
        $informasi = $dosen->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('dosen')->with(['informasi'=>$informasi]);
    }
}

