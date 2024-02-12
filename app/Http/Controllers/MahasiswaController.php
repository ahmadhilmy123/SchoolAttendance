<?php

namespace App\Http\Controllers;

use App\Exports\MhswExport;
use App\Imports\MhswImport;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MahasiswaController extends Controller
{
    public function showAllMhsw()
    {
        return view('contents.admin.mahasiswa.show-all-mhsw', [
            'title'      => 'Data Mahasiswa',
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    public function showAddMhsw()
    {
        return view('contents.admin.mahasiswa.add-mhsw', [
            'title'      => 'Tambah Data Mahasiswa',
            'kelas'      => Kelas::all(),
            'mahasiswas' => Mahasiswa::all()
        ]);
    }

    public function addMhsw(Request $request)
    {
        $validatedData = $request->validate([
            'nim'        => 'required|unique:mahasiswas|digits:6',
            'firstName'  => 'required|max:255',
            'lastName'   => 'required|max:255',
            'namaAyah'   => 'required|max:255',
            'namaIbu'    => 'required|max:255',
            'tmpLahir'   => 'max:255',
            'tglLahir'   => '',
            'jnsKelamin' => '',
            'alamat'     => '',
            'phone'      => 'max:255|unique:mahasiswas',
            'password'   => 'required|max:255',
            'email'      => 'max:255|unique:mahasiswas',
            'kelas_id'   => '',
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create([
            'email'             => $validatedData['email'],
            'firstName'         => $validatedData['firstName'],
            'lastName'          => $validatedData['lastName'],
            'password'          => $validatedData['password'],
            "email_verified_at" => now(),
            "role"              => 1,
        ]);

        $mahasiswa          = new Mahasiswa($validatedData);
        $mahasiswa->user_id = $user->id;
        $mahasiswa->save();

        return redirect()->route('admin.mahasiswa.showall')->with('success', 'Mahasiswa baru telah ditambahkan!');
    }

    public function detailMhsw(Mahasiswa $mahasiswa)
    {
        return view('contents.admin.mahasiswa.detail-mhsw', [
            'title'     => 'Detail Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function showEditMhsw(Mahasiswa $mahasiswa)
    {
        return view('contents.admin.mahasiswa.edit-mhsw', [
            'title'     => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa,
            'kelas'     => Kelas::all()
        ]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validatedData = $request->validate([
            'nim'        => 'required|max:255|digits:6',
            'firstName'  => 'required|max:255',
            'lastName'   => 'required|max:255',
            'namaAyah'   => 'required|max:255',
            'namaIbu'    => 'required|max:255',
            'tmpLahir'   => 'max:255',
            'tglLahir'   => '',
            'jnsKelamin' => '',
            'alamat'     => 'max:255',
            'phone'      => 'max:255',
            'password'   => 'required|max:255',
            'email'      => '',
            'kelas_id'   => ''
        ]);

        $mahasiswa->user->password = bcrypt($validatedData['password']);
        $mahasiswa->user->email    = $validatedData['email'];
        $mahasiswa->user->update();

        unset($validatedData['password']);
        $mahasiswa->update($validatedData);

        return redirect()->route('admin.mahasiswa.showall')->with('success', 'Data mahasiswa telah diupdate!');
    }

    public function destroy(Mahasiswa $mahasiswa)
    {
        Mahasiswa::destroy($mahasiswa->id);
        return redirect()->route('admin.mahasiswa.showall')->with('success', 'Data mahasiswa telah dihapus!');
    }


    public function export()
    {
        return Excel::download(new MhswExport(Mahasiswa::all()), 'mahasiswa.xlsx');
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
        $rows = (new MhswImport(['abc']))->toCollection(request()->file('file'))->first();

        //check match each head input into key data
        foreach ($header as $head) {
            if (!$rows[0]->has($head)) {
                return redirect()->back()->withInput()->withErrors(['kolom' => ['Pastikan semua nama kolom telah sesuai!']]);
            }
        }

        $rows = $rows->map(function ($row) use ($header) {
            return [
                'nim'           => $row[$header[0]],
                'email'         => $row[$header[1]],
                'telepon'       => $row[$header[2]],
                'first_name'    => $row[$header[3]],
                'last_name'     => $row[$header[4]],
                'nama_ayah'     => $row[$header[5]],
                'nama_ibu'      => $row[$header[6]],
                'tempat_lahir'  => $row[$header[7]],
                'tanggal_lahir' => $row[$header[8]],
                'jenis_kelamin' => $row[$header[9]],
                'alamat'        => $row[$header[10]],
                'kode_kelas'    => $row[$header[11]],
            ];
        });

        session()->put('imported_data_mhsw', $rows);

        return redirect()->route('admin.mahasiswa.import.preview');
    }

    public function importPreview()
    {
        $rows = session()->get('imported_data_mhsw');
        return view('contents.admin.mahasiswa.import-table-mhsw', [
            'title'      => 'Data Mahasiswa',
            'mahasiswas' => $rows,
            'kelass'     => Kelas::all(),
        ]);
    }

    public function importValidate(Request $request)
    {
        $data = $request->validate([
            'import.*.nim'           => 'required|numeric|unique:App\Models\Mahasiswa,nim',
            'import.*.first_name'    => 'required|string',
            'import.*.last_name'     => 'required|string',
            'import.*.kelas_id'      => 'required',
            'import.*.email'         => 'required|email|unique:App\Models\User,email',
            'import.*.alamat'        => 'required|string',
            'import.*.tempat_lahir'  => 'required|string',
            'import.*.tanggal_lahir' => 'required|date',
            'import.*.telepon'       => 'required|numeric',
            'import.*.nama_ayah'     => 'required|string',
            'import.*.nama_ibu'      => 'required|string',
            'import.*.jenis_kelamin' => 'required|string',
            'import.*.password'      => 'required|string|min:8'
        ], [
            'required' => 'Pastikan data telah terisi',
            'exists'   => 'Data tidak ditemukan',
            'unique'   => 'Data telah terdaftar',
            'string'   => 'Masukkan data dengan format yang benar',
            'min'      => 'Pastikan data minimal 8 digit',
        ]);

        foreach ($data['import'] as $mhswData) {
            $user = User::create([
                'email'             => $mhswData['email'],
                'firstName'         => $mhswData['first_name'],
                'lastName'          => $mhswData['last_name'],
                'password'          => bcrypt($mhswData['password']),
                "email_verified_at" => now(),
                "role"              => 1,
            ]);

            Mahasiswa::create([
                "user_id"        => $user->id,
                "nim"            => $mhswData["nim"],
                "phone"          => $mhswData["telepon"],
                "email"          => $mhswData["email"],
                "firstName"      => $mhswData["first_name"],
                "lastName"       => $mhswData["last_name"],
                "namaAyah"       => $mhswData["nama_ayah"],
                "namaIbu"        => $mhswData["nama_ibu"],
                "tmpLahir"       => $mhswData["tempat_lahir"],
                "tglLahir"       => $mhswData["tanggal_lahir"],
                "jnsKelamin"     => $mhswData["jenis_kelamin"],
                "alamat"         => $mhswData["alamat"],
                "kelas_id"       => Kelas::select('id')->where('kode', $mhswData['kelas_id'])->first()->id,
                "remember_token" => null,
            ]);
        }
        return redirect()->route('admin.mahasiswa.showall')->with('success', 'Import Data Mahasiswa Berhasil');
    }
}
