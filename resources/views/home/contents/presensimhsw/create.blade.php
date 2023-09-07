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
                <form action="/mhsw/presensi" method="post" id="form1">
                    @csrf
                    <input type="hidden" name="pertemuan" value="{{ $pertemuan->id }}">
                    <input type="hidden" name="mapel" value="{{ $mapel->id }}">
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td class="table-plus text-center">{{ $loop->iteration }}</td>
                        <td>{{ $siswa->firstName }} {{ $siswa->lastName }}</td>
                        <td class="text-center">
                            {{--<input type="hidden" name="presensi[{{ $loop->index }}][guru_id]" value="{{ Auth::user()->id }}">--}}
                            {{--<input type="hidden" name="presensi[{{ $loop->index }}][siswa_id]" value="{{ $siswa->id }}">--}}
                            {{-- <input type="hidden" name="presensi[{{ $loop->index }}][kelas_id]" value="{{ $siswa->kelas->id }}">--}}
                            {{-- <input type="hidden" name="presensi[{{ $loop->index }}][mapel_id]" value="{{ $mapel->id }}">--}}
                            <input type="hidden" name="presensi[{{ $siswa->id }}][siswa]" value="{{ $siswa->id }}">
                            <select class="form-control" name="presensi[{{ $siswa->id }}][kehadiran]">
                                @if($presensi[$loop->index])
                                <option selected hidden value="{{ $presensi[$loop->index]->absensi->id }}">{{ $presensi[$loop->index]->absensi->kode }} - {{ $presensi[$loop->index]->absensi->keterangan }}</option>
                                @endif
                                <!-- <option selected disabled>Pilih Kehadiran</option> -->
                                @foreach ($absensis as $absensi)
                                <option value="{{ $absensi->id }}">{{ $absensi->kode }} - {{ $absensi->keterangan }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    @endforeach
                </form>
            </tbody>
        </table>

        <div class="d-flex justify-content-end m-3">
            <button class="btn btn-outline-primary" type="submit" form="form1" value="Submit">Simpan</button>
        </div>
    </div>

</div>
@endsection