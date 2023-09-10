@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h4 class="text-blue h4">Tabel Presensi</h4>
        <p>Mapel: {{ $mapel->nama }} | Kelas: {{ $mapel->kelas->nama }}</p>
    </div>
    <div class="pb-20">
        <table class="table">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort text-center">No.</th>
                    <th class="text-center">Nama Siswa</th>
                    <th class="text-center datatable-nosort">Keterangan Absen</th>
                </tr>
            </thead>
            <tbody>
                <form action="/guru/presensi" method="post" id="form1">
                    @csrf
                    <input type="hidden" name="pertemuan" value="{{ $pertemuan->id }}">
                    <input type="hidden" name="mapel" value="{{ $mapel->id }}">
                    <tr>
                        <td class="table-plus text-center">1</td>
                        <td>{{ $guru->firstName }} {{ $guru->lastName }}</td>
                        <td class="text-center">
                            <input type="hidden" name="presensi[guru]" value="{{ $guru->id }}">
                            <select class="form-control" name="presensi[kehadiran]">
                                @if($presensi)
                                <option selected hidden value="{{ $presensi->absensi->id }}">{{ $presensi->absensi->kode }} - {{ $presensi->absensi->keterangan }}</option>
                                @endif
                                <!-- <option selected disabled>Pilih Kehadiran</option> -->
                                @foreach ($absensis as $absensi)
                                <option value="{{ $absensi->id }}">{{ $absensi->kode }} - {{ $absensi->keterangan }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                </form>
            </tbody>
        </table>

        <div class="d-flex justify-content-end m-3">
            <button class="btn btn-outline-primary" type="submit" form="form1" value="Submit">Simpan</button>
        </div>
    </div>

</div>
@endsection