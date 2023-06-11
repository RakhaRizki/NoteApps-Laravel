@extends('layouts.app')
@section('home')
@section('content')

<!-- TOMBOL TAMBAH DATA -->

                <div class="pb-3">
                  <a href='{{ url("/create") }}' class="btn btn-primary">+ Tambah Data</a>
                </div>
          
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Judul</th>
                            <th class="col-md-5">Deskripsi</th>
                            <th class="col-md-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @php($number = 1)
                        @foreach ($post as $d)
                        <tr>

                            <td> {{ $number }} </td>
                            <td> {{ $d->title }} </td>
                            <td> {{ $d->deskripsi }} </td>
                            <td>

                            <!-- Button Hapus dan Button Edit -->
                             <form method="POST" action="{{ url("/$d->id") }}">
                                 @method('DELETE')
                                 @csrf
                             <button type="submit" class="btn btn-outline-danger my-2 "><i class="fa-solid fa-trash"></i></button>
                              <a  href="{{url("/$d->id/edit")}}" class="btn btn-outline-primary"><i class="fa-regular fa-pen-to-square"></i></a>
                            </form>

                            </td>
                        @php($number++)
                        @endforeach
                        

                        </tr>
                    </tbody>
                </table>
               
          </div>
          <!-- AKHIR DATA -->
    </main>

@endsection