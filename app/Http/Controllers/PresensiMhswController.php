<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Mapel;
use App\Models\Pertemuan;
use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\Siswa;
use Carbon\Carbon;
use DateTime;
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
        return view('home.contents.presensimhsw.index', [
            'title' => 'Pilih Mapel',
            'mapels' => $this->siswa->kelas->mapels,
        ]);
    }

    //menampilkan tanggal pertemuan mapel
    public function showTgl(Mapel $mapel)
    {
        return view('home.contents.presensimhsw.tanggal', [
            'title' => 'Pilih Tanggal Presensi',
            'pertemuans' => $mapel->pertemuans,
        ]);
    }

    //manmpilkan absensi pada pertemuan tsb
    public function showPresensi(Mapel $mapel, Pertemuan $pertemuan)
    {
        // $presensi = Presensi::select()->where('pertemuan_id', $pertemuan->id)->get();
        // dd($presensi[0]->absensi-);
        return view('home.contents.presensimhsw.create', [
            'title' => 'Presensi',
            'mapel' => $mapel,
            'pertemuan' => $pertemuan,
            'siswas' => $mapel->kelas->siswas,
            'presensi' => Presensi::select()->where('pertemuan_id', $pertemuan->id)->get(),
            'absensis' => Absensi::all()
        ]);
    }

    //input data absensi
    public function inputAbsensi(Request $request)
    {
        $now = new DateTime('now');
        foreach ($request->presensi as $person) {
            Presensi::updateOrInsert([
                'pertemuan_id' => request('pertemuan'),
                'siswa_id' => $person['siswa'],
            ], [
                'waktu_absen' => $now->format('Y-m-d H:i:s'),
                'absensi_id' => $person['kehadiran'],
            ]);
        }
        return redirect('/mhsw/presensi/' . request("mapel"));
    }
}
