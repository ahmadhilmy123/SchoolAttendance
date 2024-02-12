@extends('index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="row">
    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
        <div class="pd-20 card-box height-100-p">
            <div class="profile-photo">
                <a href="modal" data-toggle="modal" data-target="#modal" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                <img src="{{ asset('vendors/images/photo1.jpg') }}" alt="" class="avatar-photo">
                <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body pd-5">
                                <div class="img-container">
                                    <img id="image" src="{{ asset('vendors/images/photo2.jpg') }}" alt="Picture">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" value="Update" class="btn btn-primary">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="text-center h5 mb-0">{{ $user->firstName }} {{ $user->lastName }}</h5>
            <div class="profile-info">
                <h5 class="mb-20 h5 text-blue">Kontak</h5>
                <ul>
                    <li>
                        <span>Alamat Email:</span>
                        {{ $user->email }}
                    </li>
                    <li>
                        <span>Phone Number:</span>
                        @if($user->role === 0)
                        {{ ($user->admin->phone != '') ? $user->admin->phone : '-' }}

                        @elseif($user->role === 1)
                        {{ ($user->mahasiswa->phone != '') ? $user->mahasiswa->phone : '-' }}

                        @elseif($user->role === 2)
                        {{ ($user->dosen->phone != '') ? $user->dosen->phone : '-' }}

                        @elseif($user->role === 3)
                        {{ ($user->asdos->phone != '') ? $user->asdos->phone : '-' }}
                        @endif
                    </li>
                    <li>
                        <span>Address:</span>
                        @if($user->role === 0)
                        {{ ($user->admin->alamat != '') ? $user->admin->alamat : '-' }}

                        @elseif($user->role === 1)
                        {{ ($user->mahasiswa->alamat != '') ? $user->mahasiswa->alamat : '-' }}

                        @elseif($user->role === 2)
                        {{ ($user->dosen->alamat != '') ? $user->dosen->alamat : '-' }}

                        @elseif($user->role === 3)
                        {{ ($user->asdos->alamat != '') ? $user->asdos->alamat : '-' }}
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
        <div class="pd-20 card-box mb-30">
            <div class="clearfix">
                <div class="pull-left">
                    <h4 class="text-blue h4">Data Pengguna</h4>
                </div>
                <div class="pull-right">
                </div>
            </div>
            <form method="POST" action="/siswa/{{ $user->id }}" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="row">
                    {{-- <div class="col-md-6 col-sm-12">
                            <div class="form-group @error('nim') has-danger @enderror">
                                <label for="nim" class="form-control-label">NIM</label>
                                <input value="{{ old('nim', $siswa->nim) }}" name="nim" id="nim" type="text" class="form-control @error('nim') form-control-danger @enderror" autofocus required>
                    @error('nim')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-muted">Example help text that remains unchanged.</small>
                </div>
                <div class="form-group @error('nama') has-danger @enderror">
                    <label for="nama" class="form-control-label">Nama Siswa</label>
                    <input value="{{ old('nama', $siswa->nama) }}" required name="nama" id="nama" type="text" class="form-control @error('nama') form-control-danger @enderror">
                    @error('nama')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('tmp_lahir') has-danger @enderror">
                    <label for="tmp_lahir" class="form-control-label">Tempat Lahir</label>
                    <input value="{{ old('tmp_lahir', $siswa->tmp_lahir) }}" required name="tmp_lahir" id="tmp_lahir" type="text" class="form-control @error('tmp_lahir') form-control-danger @enderror">
                    @error('tmp_lahir')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('tgl_lahir') has-danger @enderror">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input value="{{ old('tgl_lahir', $siswa->tgl_lahir) }}" required name="tgl_lahir" id="tgl_lahir" class="form-control" placeholder="Pilih Tanggal Lahir" type="date">
                    @error('tgl_lahir')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('jns_kelamin') has-danger @enderror">
                    <label for="jns_kelamin">Jenis Kelamin</label>
                    <select required name="jns_kelamin" id="jns_kelamin" class="selectpicker form-control" data-style="btn-outline-primary">
                        <option selected disabled hidden>Pilih Jenis Kelamin...</option>
                        <option {{ old('jns_kelamin', $siswa->jns_kelamin) == 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">Laki-laki</option>
                        <option {{ old('jns_kelamin', $siswa->jns_kelamin) == 'Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                    </select>
                    @error('jns_kelamin')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('alamat') has-danger @enderror">
                    <label for="alamat" class="form-control-label">Alamat</label>
                    <input value="{{ old('alamat', $siswa->alamat) }}" required name="alamat" id="alamat" type="text" class="form-control @error('alamat') form-control-danger @enderror">
                    @error('alamat')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('phone') has-danger @enderror">
                    <label for="phone" class="form-control-label">No. Telefon Ortu</label>
                    <input value="{{ old('phone', $siswa->phone) }}" required name="phone" id="phone" type="text" class="form-control @error('phone') form-control-danger @enderror">
                    @error('phone')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('email') has-danger @enderror">
                    <label for="email" class="form-control-label">E-mail Ortu</label>
                    <input value="{{ old('email', $siswa->email) }}" required name="email" id="email" type="text" class="form-control @error('email') form-control-danger @enderror">
                    @error('email')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('kelas_id') has-danger @enderror">
                    <label for="kelas_id">Kelas Siswa</label>
                    <select required name="kelas_id" id="kelas_id" class="selectpicker form-control" data-style="btn-outline-primary">
                        <option selected disabled hidden>Pilih Kelas Siswa...</option>
                        @foreach ($kelas as $kelas)
                        @if (old('kelas_id', $siswa->kelas_id) == $kelas->id)
                        <option value="{{ $kelas->id }}" selected>{{ $kelas->nama }}</option>
                        @else
                        <option value="{{ $kelas->id }}">{{ $kelas->nama }}</option>
                        @endif
                        @endforeach
                    </select>
                    @error('kelas_id')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">Edit Data</button>
        </div> --}}
    </div>
    </form>
</div>

</div>
@endsection
