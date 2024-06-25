@extends('layouts.main')

@section('title')
    Hapus Category
@endsection

@section('content')
    <h3>Hapus Laporan</h3>
    <div class="form-login">
        <h4>Ingin Menghapus Data ?</h4>
        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
            <a href={{ url('/category/destroy/' . $category->id_categories) }}>
                Yes
            </a>
        </button>
        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%; margin: 20px auto;">
            <a href="{{ route('pengaduan.index') }}">
                No
            </a>
        </button>
    </div>
@endsection
