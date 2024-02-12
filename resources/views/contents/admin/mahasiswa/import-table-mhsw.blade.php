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
        <form action="{{route('admin.mahasiswa.import.confirm')}}" method="post">
            @csrf
            <div class="pd-20 d-flex justify-content-between">
                <h4 class="text-blue h4">Import Mahasiswa</h4>
                <div>
                    <button type="submit" class="btn btn-success" href="{{route('admin.mahsiswa.showadd')}}">Simpan
                    </button>
                </div>
            </div>
            <div class="pb-20">
                <table class="table stripe hoverd data-table-forms nowrap">
                    <thead>
                    <tr>
                        <th hidden=""></th>
                        <th class="text-center datatable-nosort">No</th>
                        <th class="text-center datatable-nosort">NIM
                            @error('import.*.nim')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Nama Awal
                            @error('import.*.first_name')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Nama Akhir
                            @error('import.*.last_name')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Kelas
                            @error('import.*.kelas_id')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Email
                            @error('import.*.email')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Password
                            @error('import.*.password')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Alamat
                            @error('import.*.alamat')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Tempat Lahir
                            @error('import.*.tempat_lahir')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Tanggal Lahir
                            @error('import.*.tanggal_lahir')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Telepon
                            @error('import.*.telepon')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Nama Ayah
                            @error('import.*.nama_ayah')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Nama Ibu
                            @error('import.*.nama_ibu')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                        <th class="text-center datatable-nosort">Jenis Kelamin
                            @error('import.*.jenis_kelamin')
                            <i class="icon-copy fa fa-warning text-red-50" aria-hidden="true"></i>
                            @endempty
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($mahasiswas as $mahasiswa)
                        <tr>
                            <td hidden></td>

                            {{--No--}}
                            <td class="table-plus text-center">{{ $loop->iteration }}</td>

                            {{--Nim--}}
                            <td>
                                <input style="width: fit-content" type="number"
                                       class="form-control @error('import.'.$loop->iteration.'.nim') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.nim') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][nim]"
                                       value="{{ old('import.'.$loop->iteration.'.nim', $mahasiswa['nim']) }}">
                            </td>

                            {{--first_ame--}}
                            <td>
                                <input style="width: fit-content" type="text"
                                       class="form-control @error('import.'.$loop->iteration.'.first_name') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.first_name') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][first_name]"
                                       value="{{ old('import.'.$loop->iteration.'.first_name', $mahasiswa['first_name']) }}">
                            </td>

                            {{--last_name--}}
                            <td>
                                <input style="width: fit-content" type="text"
                                       class="form-control @error('import.'.$loop->iteration.'.last_name') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.last_name') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][last_name]"
                                       value="{{ old('import.'.$loop->iteration.'.last_name', $mahasiswa['last_name']) }}">
                            </td>

                            {{--kelas--}}
                            <td>
                                <select style="width: fit-content" name="import[{{ $loop->iteration }}][kelas_id]"
                                        class="custom-select @error('import.'.$loop->iteration.'.kelas_id') form-control-danger @endempty"
                                        @error('import.'.$loop->iteration.'.kelas_id') data-toggle="popover"
                                        data-trigger="hover" data-placement="top"
                                        data-content="{{$message}}"
                                    @endempty>
                                    <option selected hidden value="">Pilih Kelas Mahasiswa...</option>
                                    @foreach ($kelass as $kelas)
                                        <option class=""
                                                value="{{ $kelas->kode }}" {{ old("import.".$loop->parent->iteration.".kelas_id") === $kelas->kode || $mahasiswa['kode_kelas'] === $kelas->kode ? 'selected' : '' }}>
                                            {{ $kelas->kode }}
                                        </option>
                                    @endforeach
                                </select>
                            </td>

                            {{--email--}}
                            <td>
                                <input style="width: fit-content" type="email"
                                       class="form-control @error('import.'.$loop->iteration.'.email') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.email') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][email]"
                                       value="{{ old('import.'.$loop->iteration.'.email', $mahasiswa['email']) }}">
                            </td>

                            {{--passsword--}}
                            <td>
                                <input style="width: fit-content" type="text"
                                       class="form-control @error('import.'.$loop->iteration.'.password') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.password') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][password]"
                                       value="{{ old('import.'.$loop->iteration.'.password') }}">
                            </td>

                            {{--alamat--}}
                            <td>
                                <input style="width: fit-content" type="text"
                                       class="form-control @error('import.'.$loop->iteration.'.alamat') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.alamat') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][alamat]"
                                       value="{{ old('import.'.$loop->iteration.'.alamat', $mahasiswa['alamat']) }}">
                            </td>

                            {{--tempat_lahir--}}
                            <td>
                                <input style="width: fit-content" type="text"
                                       class="form-control @error('import.'.$loop->iteration.'.tempat_lahir') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.tempat_lahir') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][tempat_lahir]"
                                       value="{{ old('import.'.$loop->iteration.'.tempat_lahir', $mahasiswa['tempat_lahir']) }}">
                            </td>

                            {{--tanggal_lahir--}}
                            <td>
                                <input style="width: fit-content" type="date"
                                       class="form-control @error('import.'.$loop->iteration.'.tanggal_lahir') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.tanggal_lahir') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][tanggal_lahir]"
                                       value="{{ old('import.'.$loop->iteration.'.tanggal_lahir', $mahasiswa['tanggal_lahir']) }}">
                            </td>

                            {{--telepon--}}
                            <td>
                                <input style="width: fit-content" type="number"
                                       class="form-control @error('import.'.$loop->iteration.'.telepon') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.telepon') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][telepon]"
                                       value="{{ old('import.'.$loop->iteration.'.telepon', $mahasiswa['telepon']) }}">
                            </td>

                            {{--nama_ayah--}}
                            <td>
                                <input style="width: fit-content" type="text"
                                       class="form-control @error('import.'.$loop->iteration.'.nama_ayah') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.nama_ayah') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][nama_ayah]"
                                       value="{{ old('import.'.$loop->iteration.'.nama_ayah', $mahasiswa['nama_ayah']) }}">
                            </td>

                            {{--nama_ibu--}}
                            <td>
                                <input style="width: fit-content" type="text"
                                       class="form-control @error('import.'.$loop->iteration.'.nama_ibu') form-control-danger @endempty"
                                       @error('import.'.$loop->iteration.'.nama_ibu') data-toggle="popover"
                                       data-trigger="hover" data-placement="top"
                                       data-content="{{$message}}"
                                       @endempty
                                       name="import[{{ $loop->iteration }}][nama_ibu]"
                                       value="{{ old('import.'.$loop->iteration.'.nama_ibu', $mahasiswa['nama_ibu']) }}">
                            </td>

                            {{--jenis_kelamin--}}
                            <td>
                                <select style="width: fit-content" name="import[{{ $loop->iteration }}][jenis_kelamin]"
                                        class="custom-select @error('import.'.$loop->iteration.'.jenis_kelamin') form-control-danger @endempty"
                                        @error('import.'.$loop->iteration.'.jenis_kelamin') data-toggle="popover"
                                        data-trigger="hover" data-placement="top"
                                        data-content="{{$message}}"
                                        @endempty
                                        required>
                                    <option selected disabled hidden>Pilih Jenis Kelamin...</option>
                                    <option
                                        {{ old('import.'.$loop->iteration.'.jenis_kelamin',$mahasiswa['jenis_kelamin']) == 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">
                                        Laki-laki
                                    </option>
                                    <option
                                        {{ old('import.'.$loop->iteration.'.jenis_kelamin',$mahasiswa['jenis_kelamin']) == 'Perempuan' ? 'selected' : '' }} value="Perempuan">
                                        Perempuan
                                    </option>
                                </select>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </form>
    </div>
@endsection
