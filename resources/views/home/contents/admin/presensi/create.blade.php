@extends('home.index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="card-header d-flex justify-content-between">
        <h4 class="text-blue h4">Tambah Presensi</h4>
    </div>

    <div class="card-body ">
        <form class="mx-4" action="/admin/presensi/tambah" method="post">
            @csrf
            <div class="form-group row mb-4">
                <label class="col-form-label col-12 col-md-2 col-lg-1 ">Mapel</label>
                <div class="col-sm-12 col-md-10 col-lg-11">
                    <select class="form-control" id="mapel" name="mapel">
                        <option selected disabled value=""> Pilih Mata Pelajaran - Kelas - Guru</option>
                        @foreach ($mapels as $mapel)
                        <option value="{{ $mapel->id }}" text="{{ $mapel->kode }} - {{ $mapel->kelas->nama }} - {{ $mapel->nama }} - {{ $mapel->user->firstName }} {{ $mapel->user->lastName }}">{{ $mapel->kode }} - {{ $mapel->kelas->nama }} - {{ $mapel->nama }} - {{ $mapel->user->firstName }} {{ $mapel->user->lastName }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-4">
                <div class="card-title">
                    <h4 class="h5">Tambah Pertemuan</h4>
                </div>
                <div class="form-group row mb-4">
                    <label class="col-form-label col-12 col-md-2 col-lg-1">Tanggal</label>
                    <div class="col-sm-12 col-md-4 col-lg-5">
                        <input type="date" class="choose form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="d-flex p-0">
                    <div class="col-12 col-md-6 col-lg-6 pl-0">
                        <div class="card-title">
                            <h4 class="h6">Masuk Pada: </h4>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-4 col-lg-2">Waktu</label>
                            <div class="col-sm-12 col-md-8 col-lg-10">
                                <input type="time" class="choose form-control" id="masuk" name="tanggal">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 pr-0">
                        <div class="card-title">
                            <h4 class="h6">Keluar Pada: </h4>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label col-12 col-md-4 col-lg-2 ">Waktu</label>
                            <div class="col-sm-12 col-md-8 col-lg-10">
                                <input type="time" class="choose form-control" id="keluar" name="tanggal">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end col-12 p-0">
                    <button class="btn btn-outline-info" type="button" id="btn-tambah">Tambah</button>
                </div>
            </div>

            <div class="mb-4">
                <div class="card-title">
                    <h4 class="h5">Jadwal Pertemuan</h4>
                </div>
                <div class="" id="table"></div>
            </div>
            <div class="d-flex justify-content-end m-3">
                <button class="btn btn-outline-primary" type="submit" value="Submit">Simpan</button>
            </div>
        </form>
    </div>

</div>
@endsection

@push('scripts')
<script src="{{ asset('src/scripts/admin-absen.js') }}"></script>
@endpush