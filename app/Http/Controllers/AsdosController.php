<?php

namespace App\Http\Controllers;

use App\Models\Asdos;
use App\Models\Dosen;
use App\Models\User;
use Illuminate\Http\Request;

class AsdosController extends Controller
{
    public function showAllAsdos()
    {
        return view('contents.admin.asdos.all-asdos', [
            'title' => 'Data Asisten Dosen',
            'asdoss' => Asdos::all(),
        ]);
    }

    public function showAddAsdos()
    {
        return view('contents.admin.asdos.new-asdos', [
            'title' => 'Tambah Data Asisten Dosen',
            'dosens' => Dosen::all(),
        ]);
    }

    public function addAsdos(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:asdos|digits:16',
            'dosen_id' => 'required',
            'phone' => 'max:255|unique:asdos',
            'email' => 'max:255|unique:asdos',
            'password' => 'required|max:255',
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'tmpLahir' => 'max:255',
            'tglLahir' => '',
            'jns_kelamin' => '',
            'status' => '',
            'alamat' => '',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create([
            'email' => $validatedData['email'],
            'firstName' => $validatedData['firstName'],
            'lastName' => $validatedData['lastName'],
            'password' => $validatedData['password'],
            "email_verified_at" => now(),
            "role" => 3,
        ]);

        $asdos = new Asdos($validatedData);
        // dd($asdos);
        $asdos->user_id = $user->id;
        $asdos->save();

        return redirect()->route('admin.asdos.showall')->with('success', 'Asisten Dosen baru telah ditambahkan!');
    }

    public function detailAsdos(Asdos $asdos)
    {
        return view('contents.admin.asdos.detail-asdos', [
            'title' => 'Detail Data Asisten Dosen',
            'asdos' => $asdos
        ]);
    }

    public function showEditAsdos(Asdos $asdos)
    {
        return view('contents.admin.asdos.edit-asdos', [
            'title' => 'Edit Data Dosen',
            'asdos' => $asdos,
            'dosens' => Dosen::all(),
        ]);
    }

    public function update(Request $request, Asdos $asdos)
    {
        $validatedData = $request->validate([
            'nik' => 'required|digits:16',
            'dosen_id' => 'required',
            'phone' => 'max:255|',
            'email' => 'max:255|',
            'password' => 'required|max:255',
            'firstName' => 'required|max:255',
            'lastName' => 'required|max:255',
            'tmpLahir' => 'max:255',
            'tglLahir' => '',
            'jns_kelamin' => '',
            'status' => '',
            'alamat' => '',
        ]);

        $asdos->user->password = bcrypt($validatedData['password']);
        $asdos->user->email = $validatedData['email'];
        $asdos->user->update();

        unset($validatedData['password']);
        $asdos->update($validatedData);

        return redirect()->route('admin.asdos.showall')->with('success', 'Data Asisten Dosen telah diupdate!');
    }

    public function delete(Asdos $asdos)
    {
        $asdos->user->delete();
        $asdos->delete();
        return redirect()->route('admin.asdos.showall')->with('success', 'Data Asisten Dosen telah dihapus!');
    }

    // public function reviewRekap(Dosen $dosen)
    // {
    //     $tanggals = $dosen->mapels->flatMap(function ($mapel) {
    //         return $mapel->pertemuans->pluck('tanggal');
    //     })->unique()->sort();

    //     $presnsiMapel = [];
    //     foreach ($dosen->mapels as $mapel) {
    //         $prensis = [];
    //         $rekap = []; // Initialize the rekap array for this siswa
    //         foreach ($tanggals as $tanggal) {
    //             $pertemuan = Pertemuan::select('id')
    //                 ->where('mapel_id', $mapel->id)
    //                 ->where('tanggal', $tanggal)
    //                 ->where('keterangan', 'masuk')
    //                 ->first();
    //             if (isset($pertemuan)) {
    //                 $presensi = Presensi::select('absensi_id')
    //                     ->where('pertemuan_id', $pertemuan->id)
    //                     ->where('level', 'dosen')
    //                     ->first();

    //                 if (isset($presensi)) {
    //                     $absensi = $presensi->absensi->kode;
    //                 } else {
    //                     $absensi = 'A';
    //                 }
    //             } else {
    //                 $absensi = '-';
    //             }

    //             $prensis[] = [
    //                 'absensi' => $absensi,
    //             ];

    //             // Count the occurrences of each absensi kode in the rekap
    //             if (isset($rekap[$absensi])) {
    //                 $rekap[$absensi]++;
    //             } else {
    //                 $rekap[$absensi] = 1;
    //             }
    //         }
    //         // Append the rekap to the presnsiMapel array
    //         $presnsiMapel[] = [
    //             'detail' => $mapel,
    //             'kelas' => $mapel->kelas,
    //             'pertemuans' => $prensis,
    //             'rekaps' => $rekap, // Include the rekap in the output
    //         ];
    //     }
    //     return view('contents.admin.data-dosen.rekap-presensi', [
    //         'dosen' => $dosen,
    //         'pertemuans' => $tanggals,
    //         'mapels' => $presnsiMapel,
    //         'absensis' => Absensi::select('kode')->get(),
    //     ]);
    // }

    // public function excelRekap(Dosen $dosen)
    // {
    //     return Excel::download(new PresensiDosenExport($dosen), 'Rekap Dosen' . $dosen->firsName . ' ' . $dosen->lastName . ' pada tanggal ' . date('Y-m-d') . '.xlsx');
    // }

    // public function pdfRekap(Dosen $dosen)
    // {
    //     $tanggals = $dosen->mapels->flatMap(function ($mapel) {
    //         return $mapel->pertemuans->pluck('tanggal');
    //     })->unique()->sort();

    //     $presnsiMapel = [];
    //     foreach ($dosen->mapels as $mapel) {
    //         $prensis = [];
    //         $rekap = []; // Initialize the rekap array for this siswa
    //         foreach ($tanggals as $tanggal) {
    //             $pertemuan = Pertemuan::select('id')
    //                 ->where('mapel_id', $mapel->id)
    //                 ->where('tanggal', $tanggal)
    //                 ->where('keterangan', 'masuk')
    //                 ->first();
    //             if (isset($pertemuan)) {
    //                 $presensi = Presensi::select('absensi_id')
    //                     ->where('pertemuan_id', $pertemuan->id)
    //                     ->where('level', 'dosen')
    //                     ->first();

    //                 if (isset($presensi)) {
    //                     $absensi = $presensi->absensi->kode;
    //                 } else {
    //                     $absensi = 'A';
    //                 }
    //             } else {
    //                 $absensi = '-';
    //             }

    //             $prensis[] = [
    //                 'absensi' => $absensi,
    //             ];

    //             // Count the occurrences of each absensi kode in the rekap
    //             if (isset($rekap[$absensi])) {
    //                 $rekap[$absensi]++;
    //             } else {
    //                 $rekap[$absensi] = 1;
    //             }
    //         }
    //         // Append the rekap to the presnsiMapel array
    //         $presnsiMapel[] = [
    //             'detail' => $mapel,
    //             'kelas' => $mapel->kelas,
    //             'pertemuans' => $prensis,
    //             'rekaps' => $rekap, // Include the rekap in the output
    //         ];
    //     }

    //     $pdf = PDF::loadView('contents.admin.data-dosen.rekap-presensi', [
    //         'dosen' => $dosen,
    //         'pertemuans' => $tanggals,
    //         'mapels' => $presnsiMapel,
    //         'absensis' => Absensi::select('kode')->get(),
    //     ])->setPaper('a4', 'landscape');

    //     return $pdf->download('Rekap Dosen' . $dosen->firsName . ' ' . $dosen->lastName . ' pada tanggal ' . date('Y-m-d') . '.pdf');
    // }
}
