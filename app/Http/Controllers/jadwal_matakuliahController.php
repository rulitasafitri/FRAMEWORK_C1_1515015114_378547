<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\jadwal_matakuliah;

use App\ruangan;

use App\dosen_matakuliah;

use App\mahasiswa;
class jadwal_matakuliahController extends Controller
{
    protected $guarded = ['id'];
    protected $informasi = 'Gagal Melakukan Aksi';

    public function awal()
    {
        $semuajadwalmatakuliah = jadwal_matakuliah::all();
        return view('jadwalmatakuliah.awal',['semuajadwalmatakuliah'=>jadwal_matakuliah::all()]); /*compact('semuajadwalkuliah'));*/
            /*['semuajadwalkuliah'=>jadwal_matakuliah::all()]);*/
        /*return "Hello dari jadwal_matakuliahController";*/
    }
    public function tambah()
    {
        $mahasiswa = new mahasiswa;
        $ruangan = new ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwalmatakuliah.tambah', compact('mahasiswa','ruangan','dosen_matakuliah'));
    /*  return view('jadwal_matakuliah.tambah');*/
    /*  return $this->simpan();*/
    }
    public function simpan(Request $input)
    {
        $jadwal_matakuliah = new jadwal_matakuliah($input->only('ruangan_id','dosen_matakuliah_id','mahasiswa_id'));
        if ($jadwal_matakuliah->save()) $this->informasi = 'Jadwal Mahasiswa Berhasil Di Simpan';

        return redirect('jadwal_matakuliah')->with(['informasi' => $this->informasi]);
    }

    public function edit($id)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $mahasiswa= new mahasiswa;
        $ruangan = new ruangan;
        $dosen_matakuliah = new dosen_matakuliah;
        return view('jadwalmatakuliah.edit', compact('mahasiswa','ruangan','dosen_matakuliah','jadwal_matakuliah'));
    }
    public function lihat($id)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        return view('jadwalmatakuliah.lihat')->with(array('jadwal_matakuliah'=>$jadwal_matakuliah));
    }
    public function update($id, Request $input)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);
        $jadwal_matakuliah->fill($input->only('ruangan_id', 'dosen_matakuliah_id','mahasiswa_id'));       
        if ($jadwal_matakuliah->save()) $this->informasi = "Jadwal Mahasiswa Berhasil di perbaharui";
        return redirect('jadwal_matakuliah')->with(['informasi' =>$this->informasi]);
    }
    public function hapus($id)
    {
        $jadwal_matakuliah = jadwal_matakuliah::find($id);    
        if ($jadwal_matakuliah->delete()) $this->informasi = "Jadwal Mahasiswa Berhasil di Hapus";
        return redirect('jadwal_matakuliah')->with(['informasi' =>$this->informasi]);
}
}

