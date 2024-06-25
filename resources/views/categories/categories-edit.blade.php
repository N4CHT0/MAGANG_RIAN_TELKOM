@extends('layouts.main')

@section('title')
    Edit Laporan | Admin
@endsection

@section('content')
    <div class="container">
        <h3 class="text-center">Edit Laporan</h3>
        <div class="form-login">
            <form action="{{ url('/pengaduan/update/' . $category->id_categories) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="categories">Ruangan</label>
                    <input class="form-control" type="text" name="nama" id="categories" placeholder="Nama Kategori"
                        value="{{ old('nama', $category->nama) }}" />
                    @error('nama')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Keterangan</label>
                    <input class="form-control" type="text" name="harga" id="price" placeholder="Keterangan"
                        value="{{ old('harga', $category->harga) }}" />
                    @error('harga')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="photo">Foto</label>
                    <div class="mb-3 text-center">
                        <img src="{{ asset('img_categories/' . $category->gambar) }}" alt="Category Image"
                            class="img-thumbnail" width="200px">
                    </div>
                    <input type="file" name="gambar" id="photo" class="form-control-file" />
                    @error('gambar')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-simpan">Edit</button>
            </form>
        </div>
    </div>
@endsection

<style>
    .container {
        margin-top: 50px;
    }

    .text-center {
        text-align: center;
    }

    .form-login {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .form-control-file {
        padding: 5px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    .error-message {
        font-size: 14px;
        color: red;
        margin-top: 5px;
    }

    .btn-simpan {
        margin-top: 20px;
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        cursor: pointer;
    }

    .btn-simpan:hover {
        background-color: #0056b3;
    }
</style>
