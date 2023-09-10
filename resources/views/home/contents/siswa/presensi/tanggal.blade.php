@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Tabel Pilih Presensi</h4>
    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort text-center">No.</th>
                    <th class="text-center">Kelas</th>
                    <th class="text-center">Tanggal</th>
                    <th class="text-center">Mapel</th>
                    <th class="text-center">Guru</th>
                    <th class="text-center">Ket.</th>
                    <th class="text-center datatable-nosort">Lanjutkan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pertemuans as $pertemuan)
                <tr>
                    <td class="table-plus text-center">{{ $loop->iteration }}</td>
                    <td>{{ $pertemuan->mapel->kelas->nama }}</td>
                    <td>{{ \Carbon\Carbon::parse($pertemuan->waktu)->format('l, j F Y H:i') }}</td>
                    <td>{{ $pertemuan->mapel->kode }} - {{ $pertemuan->mapel->nama }}</td>
                    <td>{{ $pertemuan->mapel->user->firstName }} {{ $pertemuan->mapel->user->lastName }}</td>
                    <td>{{ $pertemuan->keterangan }}</td>
                    <td class="text-center">
                        <a href="/siswa/presensi/{{$pertemuan->mapel->id}}/{{$pertemuan->id}}" class="btn btn-sm btn-outline-primary">Pilih</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection