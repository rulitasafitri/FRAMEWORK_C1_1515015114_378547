<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\mahasiswa;

use App\pengguna;

class mahasiswaController extends Controller
// {
//      public function awal()
//     {
//     	return "Hello dari mahasiswaController";
//     }
//     public function tambah()
//     {
//     	return $this->simpan();
//     }
//     public function simpan()
//     {
//     	$mahasiswa = new mahasiswa();
//     	$mahasiswa->nama_mahasiswa ='rulita safitri';
//     	$mahasiswa->nim ='1515015114';
//     	$mahasiswa->alamat_mhs ='jalan pramuka';
//     	$mahasiswa->pengguna_id=1;
//     	$mahasiswa->save();
//     	return "data dengan title_mahasiswa{$mahasiswa->title_mahasiswa} telah disimpan";
//     }
// }


{
    //
    public function awal()
    {
      
        return view('mahasiswa.awal', ['data'=>mahasiswa::all()]);
    }
    public function tambah()
    {
      
        return view('mahasiswa.tambah');
    }
    public function simpan(Request $input)
    {
        $mahasiswa = new mahasiswa();
        $mahasiswa->nama_mahasiswa = $input->nama_mahasiswa;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat_mhs = $input->alamat_mhs;
        $informasi = $mahasiswa->save() ? 'berhasil simpan data' : 'gagal simpan data';
        return redirect('mahasiswa')->with(['infromasi'=>$informasi]);
    }
     public function edit($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.edit')->with(array('mahasiswa'=>$mahasiswa));
    }
    public function lihat($id)
    {
        $mahasiswa = mahasiswa::find($id);
        return view('mahasiswa.lihat')->with(array('mahasiswa'=>$mahasiswa));
    }
    public function update($id, Request $input)
    {
        $mahasiswa = mahasiswa::find($id);
        $mahasiswa->nama_mahasiswa = $input->nama_mahasiswa;
        $mahasiswa->nim = $input->nim;
        $mahasiswa->alamat_mhs = $input->alamat_mhs;
        $informasi = $mahasiswa->save()? 'berhasil update data' : 'gagal update data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $mahasiswa = mahasiswa::find($id);
        $informasi = $mahasiswa->delete() ?'berhasil hapus data' : 'gagal hapus data';
        return redirect('mahasiswa')->with(['informasi'=>$informasi]);
    }
}
