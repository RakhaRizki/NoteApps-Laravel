@extends('layouts.app')
@section('home')
@section('content')

<form method="POST" action="{{ url("/note/$post->id") }}">
    @method('PATCH')
    @csrf

    <h1 class="text-center"> Edit Data </h1>

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='judul' value="{{$post->title}}" id=" judul" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$post->deskripsi}}" name='deskripsi' id="deskripsi" required>
            </div>
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-outline-primary">simpan</button>
        <a href="{{url('/note')}}" class="btn btn-outline-danger">kembali</a>

</form>
</div>

@endsection