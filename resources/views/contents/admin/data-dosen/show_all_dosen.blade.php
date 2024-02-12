@extends('index')
@section('content')
    <div class="title pb-20">
        <h2 class="h3 mb-0">{{ $title }}</h2>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card-box mb-30">
        <div class="pd-20 d-flex justify-content-between">
            <h4 class="text-blue h4">Table Dosen</h4>
            <div>
                <a data-toggle="modal" data-target="#import" type="button" class="btn btn-success">Import Data Dosen</a>
                <a class="btn btn-danger" href="{{ route('admin.dosen.export') }}">Export Data Dosen</a>
                <a class="btn btn-primary" href="{{ route('admin.dosen.showadd')}}">Tambah Data Dosen</a>
            </div>
            <div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myLargeModalLabel">Import Data Dosen</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form action="{{ route('admin.dosen.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-12 col-md-2 col-lg-1 ">File</label>
                                    <div class="col-sm-12 col-md-10 col-lg-11">
                                        <input id="excel" type="file" name="file" class="form-control" required
                                               accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel, application/vnd.ms-excel.addin.macroEnabled.12, application/vnd.ms-excel.sheet.binary.macroEnabled.12, application/vnd.ms-excel.sheet.macroEnabled.12, application/vnd.ms-excel.template.macroEnabled.12, text/csv">
                                    </div>
                                </div>
                                @error('file')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror

                                @error('kolom')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                @enderror
                                <div class="card-title">
                                    <h4 class="h5">Pencocokan Nama Kolom</h4>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">NIK</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[0]" id="nik"
                                               value="{{old('head.0')}}" required>
                                    </div>

                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Email</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[1]" id="email"
                                               value="{{old('head.1')}}" required>
                                    </div>


                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Nomor Telepon</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[2]" id="phone"
                                               value="{{old('head.2')}}" required>
                                    </div>

                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Nama Awal</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[3]" id="firstName"
                                               value="{{old('head.3')}}" required>
                                    </div>


                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Nama Akhir</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[4]" id="lastName"
                                               value="{{old('head.4')}}" required>
                                    </div>

                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Tempat Lahir</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[5]" id="tmpLahir"
                                               value="{{old('head.5')}}" required>
                                    </div>

                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Tanggal Lahir</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[6]" id="tglLahir"
                                               value="{{old('head.6')}}" required>
                                    </div>

                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Jenis Kelamin</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[7]" id="jnsKelamin"
                                               value="{{old('head.7')}}" required>
                                    </div>

                                    <label class="col-form-label col-12 col-md-4 col-lg-2 ">Alamat</label>
                                    <div class="col-sm-12 col-md-8 col-lg-4 mb-2">
                                        <input type="text" class="form-control" name="head[8]" id="alamat"
                                               value="{{old('head.8')}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-success">Import</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="pb-20">
            <table class="table stripe hover data-table-export nowrap">
                <thead>
                <tr>
                    <th class="table-plus datatable-nosort">No.</th>
                    <th class="text-center">NIK</th>
                    <th class="text-center">Nama Dosen</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($dosens as $dosen)
                    <tr>
                        <td class="table-plus text-center">{{ $loop->iteration }}</td>
                        <td>{{ $dosen->nik }}</td>
                        <td>{{ $dosen->firstName }} {{ $dosen->lastName }}</td>
                        <td>{{ $dosen->email }}</td>
                        <td class="text-center">
                            <div class="dropleft">
                                <button type="button" class="btn btn-outline-secondary" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <!-- Dropdown menu links -->
                                    <a class="dropdown-item" href="/admin/dosen/{{ $dosen->id }}/rekap/excel">Export
                                        Rekap Absen as Excel</a>
                                    <a class="dropdown-item" href="/admin/dosen/{{ $dosen->id }}/rekap/pdf">Export Rekap
                                        Absen as PDF</a>
                                    <a class="dropdown-item"
                                       href="{{route('admin.dosen.detail' , ['dosen' => $dosen->id])}}">Detail</a>
                                    <a class="dropdown-item"
                                       href="{{route('admin.dosen.showedit', ['dosen' => $dosen->id])}}">Edit</a>
                                    <form action="{{route('admin.dosen.delete', ['dosen' => $dosen->id])}}"
                                          method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="dropdown-item"
                                                onclick="return confirm('Apakah anda yakin akan menghapus data Dosen ini?')">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
