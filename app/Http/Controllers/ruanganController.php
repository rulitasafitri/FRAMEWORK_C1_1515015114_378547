<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ruangan;

class ruanganController extends Controller
// {
//     public function awal()
//     {
//     	return "Hello dari ruanganController";
//     }
//     public function tambah()
//     {
//     	return $this->simpan();
//     }
//     public function simpan()
//     {
//     	$ruangan = new ruangan();
//     	$ruangan->title_ruangan ='407';
//     	$ruangan->save();
//     	return "data dengan title_ruangan{$ruangan->title_ruangan} telah disimpan";
//     }
// }


{
    //
    public function awal()
    {
      
        return view('ruangan.awal', ['data'=>ruangan::all()]);
    }
    public function tambah()
    {
      
        return view('ruangan.tambah');
    }
    public function simpan(Request $input)
    {
        $ruangan = new ruangan();
        $ruangan->title = $input->title;
        $informasi = $ruangan->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('ruangan')->with(['infromasi'=>$informasi]);
    }
     public function edit($id)
    {
        $ruangan = ruangan::find($id);
        return view('ruangan.edit')->with(array('ruangan'=>$ruangan));
    }
    public function lihat($id)
    {
        $ruangan = ruangan::find($id);
        return view('ruangan.lihat')->with(array('ruangan'=>$ruangan));
    }
    public function update($id, Request $input)
    {
        $ruangan = ruangan::find($id);
        $ruangan->title = $input->title;
        $informasi = $ruangan->save()? 'berhasil update data' : 'gagal update data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $ruangan = ruangan::find($id);
        $informasi = $ruangan->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('ruangan')->with(['informasi'=>$informasi]);
    }
}
