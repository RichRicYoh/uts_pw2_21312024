@extends('layout.master')

@section('judul')
    Tambah Peran
@endsection

@section('content')
    <form method="post" action="/film">
        @csrf
        <div class="form-group">
            <label>Film</label>
            <input type="text" name="film" value="" class="form-control">
        </div>
        @error('judul')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Cast</label>
            <textarea class="form-control" name="cast"> </textarea>
        </div>
        @error('ringkasan')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" value="" class="form-control">
        </div>
        @error('tahun')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @error('poster')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror


        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
