<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Presensi;
use Illuminate\Support\Facades\Auth;


class PresensiMhswController extends Controller
{
    //menampilkan seluruh mata pelajaran untuk kelas
    public function showMapel(Mapel $mapel) {
        
        return view('home.contents.presensimhsw.index', [
            'title' => 'Pilih Mapel',
            'mapels' => $mapel::where('guru_id', Auth::user()->id)->get()
        ]);
    }

    //menampilkan tanggal pertemuan mapel
    public function showTgl(){
        return view('home.contents.presensi.riwayatIndex', [
            'title' => 'Pilih Tanggal Presensi',
            'presensis' => Presensi::where('guru_id', Auth::user()->id)->groupBy('created_at')->get()
        ]);
    }

    //manmpilkan absensi pada pertemuan tsb
    public function showAbsensi(){
        return view('home.contents.presensi.create', [
            'title' => 'Presensi',
            'mapel' => $mapel,
            'siswas' => Siswa::where('kelas_id', $mapel->kelas_id)->orderBy('firstName', 'asc')->get(),
            'absensis' => Absensi::where('id', '!=', 2)->get()
        ]);
    }

    //input data absensi
    public function inputAbsensi(){

    }

}
