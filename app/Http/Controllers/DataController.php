<?php

namespace App\Http\Controllers;

use App\Models\Dudi;
use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;

class DataController extends Controller
{
    //siswa
    public function indexSiswa()
    {
        $siswa = Siswa::all();
        return view('layouts.siswa.index', ['siswa' => $siswa]);
    }

    public function createSiswa()
    {
        return view('layouts.siswa.create');
    }
    public function storeSiswa(Request $request)
    {
        Siswa::create([
            'nis' => $request->nis,
            'nama_siswa' => $request->nama_siswa,
            'jk_siswa' => $request->jk_siswa,
            'kelas_siswa' => $request->kelas_siswa,
            'nohp_siswa' => $request->nohp_siswa,
            'alamat_siswa' => $request->alamat_siswa
        ]);
        return redirect('/siswa');
    }
    public function editSiswa($id)
    {
        $siswa = Siswa::find($id);
        return view('layouts.siswa.edit', compact(['siswa']));
    }
    public function updateSiswa($id, Request $request)
    {
        $siswa = Siswa::find($id);
        $siswa->update($request->except(['_token', 'submit']));
        return redirect('/siswa');
    }
    public function deleteSiswa($id)
    {
        $siswa = Siswa::findOrfail($id);
        $siswa->delete();
        return redirect('/siswa');
    }


    //guru
    public function indexGuru()
    {
        $guru = Guru::all();
        return view('layouts.guru.index', ['guru' => $guru]);
    }

    public function createGuru()
    {
        return view('layouts.guru.create');
    }
    public function storeGuru(Request $request)
    {
        Guru::create([
            'nip'=>$request->nip,
            'nama_guru'=>$request->nama_guru,
            'nohp_guru'=>$request->nohp_guru,
            'jk_guru'=>$request->jk_guru,
            'alamat_guru'=>$request->alamat_guru
        ]);
        return redirect('/guru');
    }
    public function editGuru($id)
    {
        $guru = Guru::find($id);
        return view('layouts.guru.edit', compact(['guru']));
    }
    public function updateGuru($id, Request $request)
    {
        $guru = Guru::find($id);
        $guru->update($request->except(['_token', 'submit']));
        return redirect('/guru');
    }
    public function deleteGuru($id)
    {
        $guru = Guru::findOrfail($id);
        $guru->delete();
        return redirect('/guru');
    }


    //Dudi
    public function indexDudi()
    {
        $dudi = Dudi::all();
        return view('layouts.dudi.index', ['dudi' => $dudi]);
    }

    public function createDudi()
    {
        return view('layouts.dudi.create');
    }
    public function storeDudi(Request $request)
    {
        Dudi::create([
            'nama_dudi'=>$request->nama_dudi,
            'nohp_dudi'=>$request->nohp_dudi,
            'email_dudi'=>$request->email_dudi,
            'alamat_dudi'=>$request->alamat_dudi
        ]);
        return redirect('/dudi');
    }
    public function editDudi($id)
    {
        $dudi = Dudi::find($id);
        return view('layouts.dudi.edit', compact(['dudi']));
    }
    public function updateDudi($id, Request $request)
    {
        $dudi = Dudi::find($id);
        $dudi->update($request->except(['_token', 'submit']));
        return redirect('/dudi');
    }
    public function deleteDudi($id)
    {
        $dudi = Dudi::findOrfail($id);
        $dudi->delete();
        return redirect('/dudi');
    }
}
