<?php

namespace App\Http\Controllers;

use App\Exports\GuruExport;
use App\Models\Absensi;
use App\Models\Pertemuan;
use App\Models\Presensi;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\PDF;

class GuruAdminController extends Controller
{
    public function showGuru()
    {
        return view('home.contents.admin.guru.list-guru', [
            'title' => 'Pilih Dosen',
            'gurus' => User::where('is_admin', 0)->get(),
        ]);
    }

    public function reviewRekap(User $guru)
    {
        $tanggals = $guru->mapels->flatMap(function ($mapel) {
            return $mapel->pertemuans->pluck('tanggal');
        })->unique()->sort();

        $presnsiMapel = [];
        foreach ($guru->mapels as $mapel) {
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
                        ->where('level', 'guru')
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

        return view('home.contents.admin.guru.excel.guru', [
            'guru' => $guru,
            'pertemuans' => $tanggals,
            'mapels' => $presnsiMapel,
            'absensis' => Absensi::select('kode')->get(),
        ]);
    }

    public function excelRekap(User $guru)
    {
        return Excel::download(new GuruExport($guru), 'Rekap Guru' . $guru->firsName . ' ' . $guru->lastName . ' pada tanggal ' . date('Y-m-d') . '.xlsx');
    }

    public function pdfRekap(User $guru)
    {
        $tanggals = $guru->mapels->flatMap(function ($mapel) {
            return $mapel->pertemuans->pluck('tanggal');
        })->unique()->sort();

        $presnsiMapel = [];
        foreach ($guru->mapels as $mapel) {
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
                        ->where('level', 'guru')
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

        $pdf = PDF::loadView('home.contents.admin.guru.excel.guru', [
            'guru' => $guru,
            'pertemuans' => $tanggals,
            'mapels' => $presnsiMapel,
            'absensis' => Absensi::select('kode')->get(),
        ])->setPaper('a4', 'landscape');

        return $pdf->download('Rekap Guru' . $guru->firsName . ' ' . $guru->lastName . ' pada tanggal ' . date('Y-m-d') . '.pdf');
    }
}
