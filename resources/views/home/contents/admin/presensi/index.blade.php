@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h4 class="text-blue h4">Tabel Mapel</h4>
        <div>
            <a class="btn btn-primary" href="/admin/presensi/tambah">Tambah Presensi Mapel</a>
        </div>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort text-center">No.</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center">Dosen</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Pertemuan</th>
                    <th class="text-center datatable-nosort">Presensi</th>
                    <th class="text-center datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mapels as $mapel)
                <tr>
                    <td class="table-plus text-center">{{ $loop->iteration }}</td>
                    <td>{{ $mapel->nama }}</td>
                    <td>{{ $mapel->user->firstName }} {{ $mapel->user->lastName }}</td>
                    <td>{{ $mapel->kelas->nama }}</td>
                    <td>{{ $mapel->pertemuans_count }} x</td>
                    <td class="text-center">
                        <a href="/admin/presensi/{{ $mapel->id }}" class="btn btn-sm btn-outline-primary">Pilih</a>
                    </td>
                    <td class="text-center">
                        <a href="/admin/presensi/{{ $mapel->id }}/edit" class="btn btn-sm btn-outline-primary">Edit</a>
                        <a href="/admin/presensi/{{ $mapel->id }}/hapus" class="btn btn-sm btn-outline-primary">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection