<?php

namespace App\Http\Controllers;

use App\Exports\DosenExport;
use App\Exports\PresensiDosenExport;
use App\Imports\DosenImport;
use App\Models\Absensi;
use App\Models\Dosen;
use App\Models\Pertemuan;
use App\Models\Presensi;
use App\Models\User;
use Barryvdh\DomPDF\Facade\PDF;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DosenController extends Controller
{
    public function showAllDosen()
    {
        return view('contents.admin.data-dosen.show_all_dosen', [
            'title'  => 'Data Dosen',
            'dosens' => Dosen::all(),
        ]);
    }

    public function showAddDosen()
    {
        return view('contents.admin.data-dosen.new-dosen', [
            'title' => 'Tambah Data Dosen',
        ]);
    }

    public function addDosen(Request $request)
    {
        $validatedData             = $request->validate([
            'nik'         => 'required|unique:dosens|digits:16',
            'phone'       => 'max:255|unique:dosens',
            'email'       => 'max:255|unique:dosens',
            'password'    => 'required|max:255',
            'firstName'   => 'required|max:255',
            'lastName'    => 'required|max:255',
            'tmpLahir'    => 'max:255',
            'tglLahir'    => '',
            'jns_kelamin' => '',
            'alamat'      => '',
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        $user                      = User::create([
            'email'             => $validatedData['email'],
            'firstName'         => $validatedData['firstName'],
            'lastName'          => $validatedData['lastName'],
            'password'          => $validatedData['password'],
            "email_verified_at" => now(),
            "role"              => 2,
        ]);

        $dosen          = new Dosen($validatedData);
        $dosen->user_id = $user->id;
        $dosen->save();

        return redirect()->route('admin.dosen.showall')->with('success', 'Dosen baru telah ditambahkan!');
    }

    public function detailDosen(Dosen $dosen)
    {
        return view('contents.admin.data-dosen.detail-dosen', [
            'title' => 'Detail Data Dosen',
            'dosen' => $dosen
        ]);
    }

    public function showEditDosen(Dosen $dosen)
    {
        return view('contents.admin.data-dosen.edit-dosen', [
            'title' => 'Edit Data Dosen',
            'dosen' => $dosen,
        ]);
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validatedData = $request->validate([
            'nik'        => 'required|digits:16',
            'phone'      => 'max:255',
            'email'      => 'max:255',
            'password'   => 'required|max:255',
            'firstName'  => 'required|max:255',
            'lastName'   => 'required|max:255',
            'tmpLahir'   => 'max:255',
            'tglLahir'   => '',
            'jnsKelamin' => '',
            'alamat'     => '',
        ]);

        $dosen->user->password = bcrypt($validatedData['password']);
        $dosen->user->email    = $validatedData['email'];
        $dosen->user->update();

        unset($validatedData['password']);
        $dosen->update($validatedData);

        return redirect()->route('admin.dosen.showall')->with('success', 'Data Dosen telah diupdate!');
    }

    public function delete(Dosen $dosen)
    {
        $dosen->user->delete();
        $dosen->delete();
        return redirect()->route('admin.dosen.showall')->with('success', 'Data dosen telah dihapus!');
    }

    public function reviewRekap(Dosen $dosen)
    {
        $tanggals = $dosen->mapels->flatMap(function ($mapel) {
            return $mapel->pertemuans->pluck('tanggal');
        })->unique()->sort();

        $presnsiMapel = [];
        foreach ($dosen->mapels as $mapel) {
            $prensis = [];
            $rekap   = []; // Initialize the rekap array for this siswa
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
                'detail'     => $mapel,
                'kelas'      => $mapel->kelas,
                'pertemuans' => $prensis,
                'rekaps'     => $rekap, // Include the rekap in the output
            ];
        }
        return view('contents.admin.data-dosen.rekap-presensi', [
            'dosen'      => $dosen,
            'pertemuans' => $tanggals,
            'mapels'     => $presnsiMapel,
            'absensis'   => Absensi::select('kode')->get(),
        ]);
    }

    public function excelRekap(Dosen $dosen)
    {
        return Excel::download(new PresensiDosenExport($dosen), 'Rekap Dosen' . $dosen->firsName . ' ' . $dosen->lastName . ' pada tanggal ' . date('Y-m-d') . '.xlsx');
    }

    public function pdfRekap(Dosen $dosen)
    {
        $tanggals = $dosen->mapels->flatMap(function ($mapel) {
            return $mapel->pertemuans->pluck('tanggal');
        })->unique()->sort();

        $presnsiMapel = [];
        foreach ($dosen->mapels as $mapel) {
            $prensis = [];
            $rekap   = []; // Initialize the rekap array for this siswa
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
                'detail'     => $mapel,
                'kelas'      => $mapel->kelas,
                'pertemuans' => $prensis,
                'rekaps'     => $rekap, // Include the rekap in the output
            ];
        }

        $pdf = PDF::loadView('contents.admin.data-dosen.rekap-presensi', [
            'dosen'      => $dosen,
            'pertemuans' => $tanggals,
            'mapels'     => $presnsiMapel,
            'absensis'   => Absensi::select('kode')->get(),
        ])->setPaper('a4', 'landscape');

        return $pdf->download('Rekap Dosen' . $dosen->firsName . ' ' . $dosen->lastName . ' pada tanggal ' . date('Y-m-d') . '.pdf');
    }

    public function export()
    {
        return Excel::download(new DosenExport(Dosen::all()), 'Data Dosen.xlsx');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file'   => 'required|mimes:xlsx,csv',
            'head.*' => 'required',
        ]);

        //collect the header input
        $header = collect($request->head);

        //import the file into $rows
        $rows = (new DosenImport(['abc']))->toCollection(request()->file('file'))->first();

        //check match each head input into key data
        foreach ($header as $head) {
            if (!$rows[0]->has($head)) {
                return redirect()->back()->withInput()->withErrors(['kolom' => ['Pastikan semua nama kolom telah sesuai!']]);
            }
        }

        $rows = $rows->map(function ($row) use ($header) {
            return [
                'nik'           => $row[$header[0]],
                'email'         => $row[$header[1]],
                'telepon'         => $row[$header[2]],
                'first_name'    => $row[$header[3]],
                'last_name'     => $row[$header[4]],
                'tempat_lahir'  => $row[$header[5]],
                'tanggal_lahir' => $row[$header[6]],
                'jenis_kelamin' => $row[$header[7]],
                'alamat'        => $row[$header[8]],
            ];
        });
//        dd($rows, $header);

        session()->put('imported_data_dosen', $rows);

        return redirect()->route('admin.dosen.import.preview');
    }

    public function importPreview()
    {
        $rows = session()->get('imported_data_dosen');
        return view('contents.admin.data-dosen.import-table-dosen', [
            'title'  => 'Data Dosen',
            'dosens' => $rows,
        ]);
    }

    public function importValidate(Request $request)
    {
        $data = $request->validate([
            'import.*.nik'           => 'required|numeric|unique:App\Models\Dosen,nik',
            'import.*.first_name'    => 'required|string',
            'import.*.last_name'     => 'required|string',
            'import.*.email'         => 'required|email|unique:App\Models\User,email',
            'import.*.alamat'        => 'required|string',
            'import.*.tempat_lahir'  => 'required|string',
            'import.*.tanggal_lahir' => 'required|date',
            'import.*.telepon'       => 'required|numeric',
            'import.*.jenis_kelamin' => 'required|string',
            'import.*.password'      => 'required|string|min:8'
        ], [
            'required' => 'Pastikan data telah terisi',
            'exists'   => 'Data tidak ditemukan',
            'unique'   => 'Data telah terdaftar',
            'string'   => 'Masukkan data dengan format yang benar',
            'min'      => 'Pastikan data minimal 8 digit',
        ]);

        foreach ($data['import'] as $dosenData) {
            $user = User::create([
                'email'             => $dosenData['email'],
                'firstName'         => $dosenData['first_name'],
                'lastName'          => $dosenData['last_name'],
                'password'          => bcrypt($dosenData['password']),
                "email_verified_at" => now(),
                "role"              => 1,
            ]);

            Dosen::create([
                "user_id"     => $user->id,
                "nik"         => $dosenData["nik"],
                "email"       => $dosenData["email"],
                "phone"       => $dosenData["telepon"],
                "firstName"   => $dosenData["first_name"],
                "lastName"    => $dosenData["last_name"],
                "jns_kelamin" => $dosenData["jenis_kelamin"],
                "alamat"      => $dosenData["alamat"],
            ]);
        }
        return redirect()->route('admin.dosen.showall')->with('success', 'Import Data Dosen Berhasil');
    }
}
