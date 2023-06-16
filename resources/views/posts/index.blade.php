@extends('layouts.app')
@section('content')

<!-- TOMBOL TAMBAH DATA -->


<form method="POST" action="{{ url('/note') }}">
    @csrf



    <div class=" border border-dark-300 shadow p-3 mb-5 bg-body-white rounded">
        <div class="mb-3 row">
            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name='judul' id="judul" required>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name='deskripsi' id="deskripsi" required></textarea>
            </div>
        </div>

        <!-- Button -->
        <button type="submit" class="btn btn-outline-primary">simpan</button>


</form>
</div>

<table class="table table-striped">

    <tbody>
        @php($number = 1)
        @foreach ($post->reverse() as $d)


        <div class="card my-4 ">
            <div class="card-body">
                <h5 class="card-title">{{ $d->judul }}</h5>
                <p class="card-text">{{ Illuminate\Support\Str::limit($d->deskripsi, 50) }}</p>

                <a href="{{ url("note/$d->id/show") }}" class="btn btn-primary">Selengkapnya</a>

            </div>
        </div>
        @php($number++)
        @endforeach





        </tr>
    </tbody>
</table>

</div>
<!-- AKHIR DATA -->
</main>

@endsection