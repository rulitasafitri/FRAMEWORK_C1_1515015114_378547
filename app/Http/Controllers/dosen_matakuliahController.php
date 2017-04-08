<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\dosen_matakuliah;

use App\dosen;

use App\matakuliah;

class dosen_matakuliahController extends Controller
{
   
    protected $guarded = ['id'];
    protected $informasi = 'Gagal Melakukan Aksi';
   public function awal()
    {
        $semuadosenmatakuliah = dosen_matakuliah::all();
        return view('dosenmatakuliah.awal',['semuadosenmatakuliah'=>dosen_matakuliah::all()]);
    }
    public function tambah()
    {
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatakuliah.tambah', compact('dosen','matakuliah'));
    }
    public function simpan(Request $input)
    {
        $dosen_matakuliah = new dosen_matakuliah($input->only('dosen_id','matakuliah_id'));
        if($dosen_matakuliah->save()) $this->informasi = 'Dosen Matakuliah Berhasil Disimpan';
        return redirect('dosen_matakuliah')->with(['informasi' => $this->informasi]);
    }
    
    public function edit($id)
    {

        $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen = new dosen;
        $matakuliah = new matakuliah;
        return view('dosenmatakuliah.edit', compact('dosen','matakuliah','dosen_matakuliah'));
    }
    public function lihat($id)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        return view('dosenmatakuliah.lihat')->with(array('dosen_matakuliah'=>$dosen_matakuliah));
    }
    public function update($id, Request $input)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $dosen_matakuliah->fill($input->only('dosen_id','matakuliah_id'));

        if($dosen_matakuliah->save()) $this->informasi = "Dosen Matakuliah Berhasil Di Perbaharui";
        return redirect('dosen_matakuliah')->with(['informasi' =>$this->informasi]);

        // $dosen_matakuliah->nama = $input ;
        // $dosen_matakuliah->nip = $input;
        // $dosen_matakuliah->alamat = $input;
        // $dosen_matakuliah->pengguna_id = $input;  
        // $dosen_matakuliah = save() ? 'Berhasil Update data' : 'gagal Update data';
        // return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
    public function hapus($id)
    {
        $dosen_matakuliah = dosen_matakuliah::find($id);
        $informasi = $dosen_matakuliah->delete()? 'Berhasil hapus data' : 'gagal hapus data';
        // if ($dosenlmatakuliah->delete()) $this->informasi = "Jadwal Dosen  Berhasil di Hapus";
        return redirect('dosenmatakuliah')->with(['informasi' =>$this->informasi]);


        // $informasi = $dosen_matakuliah->save()    ? 'Berhasil hapus data' : 'gagal hapus data';
        // return redirect('dosen_matakuliah')->with(['informasi'=>$informasi]);
    }
    
}
