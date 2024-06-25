@extends('layouts.main')

@section('title')
    Tambah Laporan | Admin
@endsection

@section('content')
    <div class="col-12">
        <div class="card">
            <div class="card-body justify-content-between">
                <p>
                    Buat Data Laporan
                </p>
                <form action="{{ route('pengaduan.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="categories">Ruangan</label>
                        <input class="form-control" type="text" name="nama" id="categories"
                            placeholder="Masukkan nama Ruangan" />
                        @error('nama')
                            <p style="font-size: 10px; color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="price">Keterangan</label>
                        <input class="form-control" type="text" name="harga" id="price" placeholder="Keterangan"
                            value="{{ old('harga') }}" />
                        @error('harga')
                            <p style="font-size: 10px; color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input class="form-control" type="file" name="gambar" id="photo" />
                        @error('gambar')
                            <p style="font-size: 10px; color: red">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary" name="simpan">
                        Simpan
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
