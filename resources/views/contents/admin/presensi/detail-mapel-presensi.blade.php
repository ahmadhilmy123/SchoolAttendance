@extends('index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="card-header d-flex justify-content-between">
        <h4 class="text-blue h4">Tabel Pilih Presensi</h4>
        <div class=" d-flex justify-content-end">
            <a href="{{route('admin.presensi.rekap.dosen', ['mapel' => $mapel->id ] )}}" class="btn btn-sm btn-outline-info">Rekap Dosen</a>
            <a href="{{route('admin.presensi.rekap.mahasiswa', ['mapel' => $mapel->id ] )}}" class="btn btn-sm btn-outline-primary">Rekap Siswa</a>
        </div>
    </div>
    <div class="card-body ">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort text-center">No.</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center">Dosen</th>
                    <th class="text-center">Ket.</th>
                    <th class="text-center">SKS</th>
                    <th class="text-center datatable-nosort">Lanjutkan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertemuans as $pertemuan)
                <tr>
                    <td class="table-plus text-center">{{ $loop->iteration }}</td>
                    <td>{{ $pertemuan->mapel->kelas->nama }}</td>
                    <td>{{ \Carbon\Carbon::parse($pertemuan->tanggal . ' ' . $pertemuan->waktu)->format('l, j F Y H:i') }}</td>
                    <td>{{ $pertemuan->mapel->kode }} - {{ $pertemuan->mapel->nama }}</td>
                    <td>{{ $pertemuan->mapel->dosen->firstName }} {{ $pertemuan->mapel->dosen->lastName }}</td>
                    <td>{{ $pertemuan->keterangan }}</td>
                    <td>{{ $pertemuan->sks }}</td>
                    <td class="text-center">
                        <a href="{{route('admin.presensi.pertemuan.dosen', ['mapel' => $pertemuan->mapel->id, 'pertemuan' => $pertemuan->id ] )}}" class="btn btn-sm btn-outline-primary">Dosen</a>
                        <a href="{{route('admin.presensi.pertemuan.mahasiswa', ['mapel' => $pertemuan->mapel->id, 'pertemuan' => $pertemuan->id ] )}}" class="btn btn-sm btn-outline-primary">Mahasiswa</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection