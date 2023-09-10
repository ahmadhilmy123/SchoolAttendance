<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mapel;
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
        dd($mapel->presensis);
        return view('home.contents.presensi.tanggal', [
            'title' => 'Pilih Tanggal Presensi',
            'presensis' => $mapel->presensis,
        ]);
    }

    //manmpilkan absensi pada pertemuan tsb
    public function showAbsensi(Mapel $mapel)
    {
        return view('home.contents.presensi.create', [
            'title' => 'Presensi',
            'mapel' => $mapel,
            'siswas' => Siswa::where('kelas_id', $mapel->kelas_id)->orderBy('firstName', 'asc')->get(),
            'absensis' => Absensi::where('id', '!=', 2)->get()
        ]);
    }

    //input data absensi
    public function inputAbsensi()
    {
    }
}
