@extends('layouts.main')

@section('title')
    Pengaduan | Admin
@endsection
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="btn-group-lg">
                <a href="{{ route('pengaduan.create') }}" class="btn-success"><i class="fas fa-plus"></i> Tambah Data </a>
                <a href="/pengaduan/cetak" class="btn-danger"><i class="fas fa-print"></i> Cetak Data </a>
            </div>
            <table class="table-data">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Ruangan</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td><img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="300px">
                            </td>
                            <td>{{ $category->nama }}</td>
                            <td>
                                <form action="/pengaduan/update/{{ $category->id_categories }}" method="POST">
                                    @csrf
                                    <input type="text" name="harga" value="{{ $category->harga }}">
                                </form>
                            </td>
                            <td>
                                <a href="/pengaduan/edit/{{ $category->id_categories }}"><i class="fas fa-edit"></i>
                                    Edit</a>
                                <a href="/pengaduan/hapus/{{ $category->id_categories }}"><i class="fas fa-trash"></i>
                                    Hapus</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" align="center">Tidak ada data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection

<style>
    .table-data {
        border-collapse: collapse;
        width: 80%;
        margin: auto;
    }

    .table-data th,
    .table-data td {
        border: 1px solid #bd2d2d;
        padding: 8px;
        text-align: center;
        font-size: 20;
    }

    .table-data th {
        background-color: #f2f2f2;
        font-size: 20;
        text-align: center;
    }

    .buttons-container {
        margin: auto;
        display: flex;
        justify-content: center;
        /* Untuk membuat tombol di tengah */
    }

    .buttons-container .btn {
        margin: 0 20px;
        /* Memberikan jarak antara tombol */
    }

    .
</style>
