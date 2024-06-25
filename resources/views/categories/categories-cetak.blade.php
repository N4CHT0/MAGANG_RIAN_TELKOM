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
    <h3>Report Laporan</h3>
    <table class="table-data">
        <thead>
            <tr>
                <th>Photo</th>
                <th>Ruangan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
<tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $category->nama }}</td>
    <td>
        <form action="/category/update/{{ $category->id_categories }}" method="POST">
            @csrf
            <input type="text" name="harga" value="{{ $category->harga }}" onchange="this.form.submit()">
        </form>
    </td>
</tr>
@endforeach

        </tbody>
</body>

</html>
