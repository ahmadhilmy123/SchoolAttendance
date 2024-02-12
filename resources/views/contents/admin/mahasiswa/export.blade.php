<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">

    <style>
        .my-class {
            overflow: auto;
            width: 100%;
            font-size: 10px;
        }

        .my-class table {
            border: 2px double #000000;
            height: 100%;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 1px;
        }

        .my-class table thead {
            border: 2px double #000000;
            height: 100%;
            width: 100%;
            border-collapse: collapse;
            border-spacing: 1px;
            text-align: center;
        }

        .my-class table tbody {
            border-collapse: collapse;
            border-spacing: 0.2px;
            text-align: left;
        }

        .my-class th {
            border: 2px double #000000;
            background-color: #94CBDF;
            color: #000000;
            padding: 5px;
        }

        .my-class td {
            border: 2px double #000000;
            background-color: #FFFFFF;
            color: #000000;
            padding: 5px;
        }

        .text-center {
            text-align: center;
        }

        .text-left {
            text-align: left;
        }

        .text-right {
            text-align: right;
        }
    </style>
</head>

<body>
<div class="my-class">
    <table>
        <thead>
        <tr>
            <th class="table-plus datatable-nosort">No.</th>
            <th class="text-center">NIM</th>
            <th class="text-center">Nama Mahasiswa</th>
            <th class="text-center">Id Kelas</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">Ayah</th>
            <th class="text-center">Ibu</th>
            <th class="text-center">Tempat, Tanggal Lahir</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">No. Telepon</th>
            <th class="text-center">Email</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($mahasiswas as $mahasiswa)
            <tr>
                <td class="table-plus text-center">{{ $loop->iteration }}</td>
                <td>{{ $mahasiswa->nim }}</td>
                <td>{{ $mahasiswa->firstName }} {{ $mahasiswa->lastName }}</td>
                <td>{{ $mahasiswa->kelas->kode }}</td>
                <td>{{ $mahasiswa->kelas->nama }}</td>
                <td>{{ $mahasiswa->namaAyah }}</td>
                <td>{{ $mahasiswa->namaIbu  }}</td>
                <td>{{ $mahasiswa->tmpLahir }}, {{ $mahasiswa->tglLahir }}</td>
                <td>{{ $mahasiswa->jnsKelamin }}</td>
                <td>{{ $mahasiswa->alamat }}</td>
                <td>{{ $mahasiswa->phone }}</td>
                <td>{{ $mahasiswa->email }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
