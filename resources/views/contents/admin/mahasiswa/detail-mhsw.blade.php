@extends('index')
@section('content')
<div class="title pb-20">
    <h2 class="h3 mb-0">{{ $title }}</h2>
</div>
<div class="card-box mb-30">
    <div class="pd-20 d-flex justify-content-between">
        <h4 class="text-blue h4">Detail Mahasiswa</h4>
        <div class="dropleft">
            <button type="button" class="btn btn-outline-secondary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bi bi-three-dots"></i>
            </button>
            <div class="dropdown-menu">
                <!-- Dropdown menu links -->
                <a class="dropdown-item" href="{{route('admin.mahsiswa.showadd')}}">Tambah</a>
                <a class="dropdown-item" href="{{route('admin.mahasiswa.showedit', ['mahasiswa'=>$mahasiswa->id])}}">Edit</a>
                <form action="{{route('admin.mahasiswa.delete', ['mahasiswa'=>$mahasiswa->id])}}" method="post">
                    @method('delete')
                    @csrf
                    <button class="dropdown-item" onclick="return confirm('Apakah anda yakin akan menghapus buku ini?')">Hapus</button>
                </form>
            </div>
            <a class="btn btn-outline-primary" href="{{route('admin.mahasiswa.showall')}}"><i class="bi bi-arrow-return-left"></i></a>
        </div>
    </div>
    <div class="pb-20">
        <table class="table stripe hover data-table-export nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">No.</th>
                    <th class="text-center">Data</th>
                    <th class="text-center">Isi Data</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>NIM :</td>
                    <td>{{ $mahasiswa->nim }}</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Nama Depan :</td>
                    <td>{{ $mahasiswa->firstName }}</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Nama Belakang :</td>
                    <td>{{ $mahasiswa->lastName }}</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Nama Ayah :</td>
                    <td>Bapak {{ $mahasiswa->namaAyah }}</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Nama Ibu :</td>
                    <td>Ibu {{ $mahasiswa->namaIbu }}</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Tempat Lahir :</td>
                    <td>{{ $mahasiswa->tmpLahir }}</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Tanggal Lahir :</td>
                    <td>{{ $mahasiswa->tglLahir }}</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Jenis Kelamin :</td>
                    <td>{{ $mahasiswa->jnsKelamin }}</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Alamat :</td>
                    <td>{{ $mahasiswa->alamat }}</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>No. Telefon :</td>
                    <td>{{ $mahasiswa->phone }}</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>E-mail :</td>
                    <td>{{ $mahasiswa->email }}</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Kelas Mahasiswa :</td>
                    <td>{{ $mahasiswa->kelas->nama }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
