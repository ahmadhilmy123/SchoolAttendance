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
    <table class="table stripe hover data-table-export nowrap">
        <thead>
        <tr>
            <th class="table-plus datatable-nosort">No.</th>
            <th class="text-center">NIK</th>
            <th class="text-center">Nama Dosen</th>
            <th class="text-center">Email</th>
            <th class="text-center">Jenis Kelamin</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">No Telepon</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($dosens as $dosen)
            <tr>
                <td class="table-plus text-center">{{ $loop->iteration }}</td>
                <td>{{ $dosen->nik }}</td>
                <td>{{ $dosen->firstName }} {{ $dosen->lastName }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->jns_kelamin }}</td>
                <td>{{ $dosen->alamat }}</td>
                <td>{{ $dosen->phone }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>

</html>
