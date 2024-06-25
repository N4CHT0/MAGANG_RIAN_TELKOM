@extends('layouts.main')

@section('title')
    Pengaduan | Admin
@endsection

@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="card-title">Data Pengaduan</h3>
        </div>
        <div class="card-body">
            <div class="btn-group mb-3 justify-content-between">
                <a href="{{ route('pengaduan.create') }}" class="btn btn-danger d-flex align-items-center">
                    Tambah Data
                </a>
                <a href="{{ route('pengaduan.cetak') }}" class="btn btn-success ms-2 d-flex align-items-center">
                    Cetak Data
                </a>
            </div>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Ruangan</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                    <tr>
                        <td><img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="150px" height="150px"></td>
                        <td>{{ $category->nama }}</td>
                        <td>
                            <form action="/category/update/{{ $category->id_categories }}" method="POST">
                                @csrf
                                <input type="text" name="harga" value="{{ $category->harga }}">
                            </form>
                        </td>
                        <td>
                            <div class="btn-group">
                                <a href="/pengaduan/edit/{{ $category->id_categories }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                <a href="/pengaduan/hapus/{{ $category->id_categories }}" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</a>
                            </div>
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
</div>
@endsection
