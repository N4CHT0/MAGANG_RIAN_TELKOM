<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Category</title>
    <style>
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }

        .table-data tr th,
        .table-data tr td {
            border: 1px solid black;
            font-size: 11pt;
            padding: 10px 20px;
            text-align: center;
        }

        .table-data tr th {
            background-color: #2c3e50;
            color: white;
        }

        .table-data tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .table-data tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>

<body>
    <h3>Data Transactions</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th style="width: 20%">Nama</th>
                <th>Jenis Kucing</th>
                <th style="width: 20%">Harga</th>
                <th style="width: 20%">Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($transaction as $show)
                <tr>
                    <td>{{ $show->nama }}</td>
                    <td>{{ $show->category->nama }}</td>
                    <td>Rp. {{ number_format($show->harga) }}</td>
                    <td>{{ $show->tanggal }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
</body>

</html>
