@extends('layouts.app')
@section('title',"show")
@section('content')

<div class="container">

    <article class="blog-post mt-5">
        <div class="card my-4 ">
            <div class="card-body">
                <h5 class="card-title">{{ $post->judul }}</h5>
                <p class="card-text">{{$post->deskripsi }}</p>


                    
                    <form method="post" action="{{ url("note/$post->id") }}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger ">Hapus</button>
                        <a href="{{ url("note/$post->id/edit") }}" class="btn btn-warning ">Edit</a>
                    </form>

            </div>
        </div>

    </article>


    <a href="{{ url('note') }}" class="btn btn-success">Kembali</a>

</div>


<!-- javascript bootstrap local -->

@endsection