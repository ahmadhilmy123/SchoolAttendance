<?php

namespace App\Exports;

use App\Models\Absensi;
use App\Models\Pertemuan;
use App\Models\Presensi;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PresensiDosenExport implements FromView
{
    protected $dosen;

    function __construct($dosen)
    {
        $this->dosen = $dosen;
    }
    public function view(): View
    {
        $tanggals = $this->dosen->mapels->flatMap(function ($mapel) {
            return $mapel->pertemuans->pluck('tanggal');
        })->unique()->sort();

        $presnsiMapel = [];
        foreach ($this->dosen->mapels as $mapel) {
            $prensis = [];
            $rekap = []; // Initialize the rekap array for this siswa
            foreach ($tanggals as $tanggal) {
                $pertemuan = Pertemuan::select('id')
                    ->where('mapel_id', $mapel->id)
                    ->where('tanggal', $tanggal)
                    ->where('keterangan', 'masuk')
                    ->first();
                if (isset($pertemuan)) {
                    $presensi = Presensi::select('absensi_id')
                        ->where('pertemuan_id', $pertemuan->id)
                        ->where('level', 'dosen')
                        ->first();

                    if (isset($presensi)) {
                        $absensi = $presensi->absensi->kode;
                    } else {
                        $absensi = 'A';
                    }
                } else {
                    $absensi = '-';
                }

                $prensis[] = [
                    'absensi' => $absensi,
                ];

                // Count the occurrences of each absensi kode in the rekap
                if (isset($rekap[$absensi])) {
                    $rekap[$absensi]++;
                } else {
                    $rekap[$absensi] = 1;
                }
            }
            // Append the rekap to the presnsiMapel array
            $presnsiMapel[] = [
                'detail' => $mapel,
                'kelas' => $mapel->kelas,
                'pertemuans' => $prensis,
                'rekaps' => $rekap, // Include the rekap in the output
            ];
        }

        return view('contents.admin.data-dosen.rekap-presensi', [
            'dosen' => $this->dosen,
            'pertemuans' => $tanggals,
            'mapels' => $presnsiMapel,
            'absensis' => Absensi::select('kode')->get(),
        ]);
    }
}
