@extends('index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="pd-20 card-box mb-30">
    <div class="clearfix">
        <div class="pull-left">
            <h4 class="text-blue h4">Form Mahasiswa</h4>
        </div>
        <div class="pull-right">
        </div>
    </div>
    <form method="POST" action="{{route('admin.mahasiswa.edit', ['mahasiswa'=>$mahasiswa->id])}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="form-group @error('nim') has-danger @enderror">
                    <label for="nim" class="form-control-label">NIM</label>
                    <input value="{{ old('nim', $mahasiswa->nim) }}" name="nim" id="nim" type="text" class="form-control @error('nim') form-control-danger @enderror" autofocus required>
                    @error('nim')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    {{-- <small class="form-text text-muted">Example help text that remains unchanged.</small> --}}
                </div>
                <div class="form-group @error('password') has-danger @enderror">
                    <label for="password" class="form-control-label">Password</label>
                    <input name="password" id="password" type="password" class="form-control @error('password') form-control-danger @enderror" required>
                    @error('password')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                    <small class="form-text text-danger">Harus diisi dengan password yang lama atau membuat baru</small>
                </div>
                <div class="form-group @error('kelas_id') has-danger @enderror">
                    <label for="kelas_id">Kelas Mahasiswa</label>
                    <select required name="kelas_id" id="kelas_id" class="selectpicker form-control" data-style="btn-outline-primary">
                        <option selected disabled hidden>Pilih Kelas Mahasiswa...</option>
                        @foreach ($kelas as $kelas)
                        @if (old('kelas_id', $mahasiswa->kelas_id) == $kelas->id)
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
                <div class="form-group @error('firstName') has-danger @enderror">
                    <label for="firstName" class="form-control-label">Nama Depan Mahasiswa</label>
                    <input value="{{ old('firstName', $mahasiswa->firstName) }}" required name="firstName" id="firstName" type="text" class="form-control @error('firstName') form-control-danger @enderror">
                    @error('firstName')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('lastName') has-danger @enderror">
                    <label for="lastName" class="form-control-label">Nama Belakang Mahasiswa</label>
                    <input value="{{ old('lastName', $mahasiswa->lastName) }}" required name="lastName" id="lastName" type="text" class="form-control @error('lastName') form-control-danger @enderror">
                    @error('lastName')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('namaAyah') has-danger @enderror">
                    <label for="namaAyah" class="form-control-label">Nama Ayah Mahasiswa</label>
                    <input value="{{ old('namaAyah', $mahasiswa->namaAyah) }}" required name="namaAyah" id="namaAyah" type="text" class="form-control @error('namaAyah') form-control-danger @enderror">
                    @error('namaAyah')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('namaIbu') has-danger @enderror">
                    <label for="namaIbu" class="form-control-label">Nama Ibu Mahasiswa</label>
                    <input value="{{ old('namaIbu', $mahasiswa->namaIbu) }}" required name="namaIbu" id="namaIbu" type="text" class="form-control @error('namaIbu') form-control-danger @enderror">
                    @error('namaIbu')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('tmpLahir') has-danger @enderror">
                    <label for="tmpLahir" class="form-control-label">Tempat Lahir</label>
                    <input value="{{ old('tmpLahir', $mahasiswa->tmpLahir) }}" name="tmpLahir" id="tmpLahir" type="text" class="form-control @error('tmpLahir') form-control-danger @enderror">
                    @error('tmpLahir')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('tglLahir') has-danger @enderror">
                    <label for="tglLahir">Tanggal Lahir</label>
                    <input value="{{ old('tglLahir', $mahasiswa->tglLahir) }}" name="tglLahir" id="tglLahir" class="form-control" placeholder="Pilih Tanggal Lahir" type="date">
                    @error('tglLahir')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('jnsKelamin') has-danger @enderror">
                    <label for="jnsKelamin">Jenis Kelamin</label>
                    <select name="jnsKelamin" id="jnsKelamin" class="selectpicker form-control" data-style="btn-outline-primary">
                        <option selected disabled hidden>Pilih Jenis Kelamin...</option>
                        <option {{ old('jnsKelamin', $mahasiswa->jnsKelamin) == 'Laki-laki' ? 'selected' : '' }} value="Laki-laki">Laki-laki</option>
                        <option {{ old('jnsKelamin', $mahasiswa->jnsKelamin) == 'Perempuan' ? 'selected' : '' }} value="Perempuan">Perempuan</option>
                    </select>
                    @error('jnsKelamin')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('alamat') has-danger @enderror">
                    <label for="alamat" class="form-control-label">Alamat</label>
                    <input value="{{ old('alamat', $mahasiswa->alamat) }}" name="alamat" id="alamat" type="text" class="form-control @error('alamat') form-control-danger @enderror">
                    @error('alamat')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('phone') has-danger @enderror">
                    <label for="phone" class="form-control-label">No. Telefon Ortu</label>
                    <input placeholder="0812-3456-7891" value="{{ old('phone', $mahasiswa->phone) }}" name="phone" id="phone" type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" class="form-control @error('phone') form-control-danger @enderror">
                    @error('phone')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group @error('email') has-danger @enderror">
                    <label for="email" class="form-control-label">Alamat Email Ortu</label>
                    <input value="{{ old('email', $mahasiswa->email) }}" name="email" id="email" type="text" class="form-control @error('email') form-control-danger @enderror">
                    @error('email')
                    <div class="form-control-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-warning">Edit Data</button>
            </div>
        </div>
    </form>
</div>
@endsection
