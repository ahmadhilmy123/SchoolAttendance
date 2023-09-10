<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mapel;
use App\Models\Pertemuan;
use App\Models\Presensi;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToArray;

class PresensiGuruController extends Controller
{
    public $guru;

    public function __construct()
    {
        // Retrieve the User model instance and assign it to $guru
        $this->guru = User::find(18);
    }

    //menampilkan seluruh mata pelajaran untuk kelas
    public function showMapel()
    {
        return view('home.contents.guru.presensi.index', [
            'title' => 'Pilih Mapel',
            'mapels' => $this->guru->mapels,
        ]);
    }

    //menampilkan tanggal pertemuan mapel
    public function showTgl(Mapel $mapel)
    {
        return view('home.contents.guru.presensi.tanggal', [
            'title' => 'Pilih Tanggal Presensi',
            'pertemuans' => $mapel->pertemuans,
        ]);
    }

    //manmpilkan absensi pada pertemuan tsb
    public function showPresensi(Mapel $mapel, Pertemuan $pertemuan)
    {
        return view('home.contents.guru.presensi.create', [
            'title' => 'Presensi',
            'mapel' => $mapel,
            'pertemuan' => $pertemuan,
            'guru' => $this->guru,
            'presensi' => Presensi::select()->where('pertemuan_id', $pertemuan->id)->where('level', 'guru')->first(),
            'absensis' => Absensi::all(),
        ]);
    }

    //input data absensi
    public function inputAbsensi(Request $request)
    {
        $now = new DateTime('now');

        $waktu_kelas = Pertemuan::select('waktu')->where("id", $request->pertemuan)->first()->toArray();
        // dd($now < $waktu_kelas['waktu']);

        $person = $request->presensi;
        Presensi::updateOrInsert([
            'pertemuan_id' => request('pertemuan'),
            'guru_id' => $person['guru'],
            'level' => 'guru',
        ], [
            'waktu_absen' => $now->format('Y-m-d H:i:s'),
            'absensi_id' => $person['kehadiran'],
        ]);
        return redirect('/guru/presensi/' . request("mapel"));
    }
}
