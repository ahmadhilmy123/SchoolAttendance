<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mapel;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;


class PresensiMhswController extends Controller
{
    public $siswa;

    public function __construct()
    {
        // Retrieve the Siswa model instance and assign it to $siswa
        $this->siswa = Siswa::find(1);
    }

    //menampilkan seluruh mata pelajaran untuk kelas
    public function showMapel()
    {
        // dd($this->siswa->kelas->mapels);
        return view('home.contents.presensimhsw.index', [
            'title' => 'Pilih Mapel',
            'mapels' => $this->siswa->kelas->mapels,
        ]);
    }

    //menampilkan tanggal pertemuan mapel
    public function showTgl(Mapel $mapel)
    {
        // dd($mapel->pertemuans);
        return view('home.contents.presensimhsw.tanggal', [
            'title' => 'Pilih Tanggal Presensi',
            'pertemuans' => $mapel->pertemuans,
        ]);
    }

    //manmpilkan absensi pada pertemuan tsb
    public function showPresensi(Mapel $mapel, Pertemuan $pertemuan)
    {
        return view('home.contents.presensimhsw.create', [
            'title' => 'Presensi',
            'mapel' => $mapel,
            'pertemuan' => $pertemuan,
            'siswas' => $mapel->kelas->siswas,
            'presensi' => 
            'absensis' => Absensi::all()
        ]);
    }

    //input data absensi
    public function inputAbsensi(Request $request)
    {
        dd(request()->all());
        foreach ($request->presensi as $person) {
            Presensi::create($person);
        }
        return redirect('/riwayatPresensi');
    }
}
