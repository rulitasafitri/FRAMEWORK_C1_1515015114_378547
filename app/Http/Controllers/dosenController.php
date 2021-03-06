<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen;

use App\pengguna;

class dosenController extends Controller

{
     protected $informasi = 'Gagal Melakukan Aksi';
     public function awal()
    {
        $semuadosen = dosen::all();
        return view('dosen.awal',['semuadosen'=>dosen::all()]);
    }
    public function tambah()
    {
        return view('dosen.tambah');
    }
    public function simpan(Request $input)
    {
        $pengguna = new pengguna($input->only('username','password'));
        if($pengguna->save()){
            $dosen = new dosen();
            $dosen->nama_dosen = $input->nama_dosen;
            $dosen->nip = $input->nip;
            $dosen->alamat = $input->alamat;
            if($pengguna->dosen()->save($dosen)) $this->informasi = 'Berhasil Simpan Data';
        }
            return redirect('dosen')->with(['informasi' => $this->informasi]);
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
        $dosen->nip = $input->nip;
        $dosen->alamat = $input->alamat;
        if(!is_null($input->username)){
            $pengguna = $dosen->pengguna->fill($input->only('username'));
            if(!empty($input->password)) $pengguna->password = $input->password;
            if($pengguna->save()) $this->informasi = 'Berhasil Simpan Data';
        }else{
            $this->informasi = 'Berhasil Ubah Data';        
        }
        return redirect('dosen')->with(['informasi' => $this->informasi]);
    }

    public function hapus($id)
    {
        $dosen = dosen::find($id);
        if ($dosen->pengguna()->delete()){
            if ($dosen->delete()) $this->informasi = 'Berhasil Hapus Data';
        }

        return redirect('dosen')->with(['informasi'=> $this->informasi]);
    }
}
