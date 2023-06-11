@extends('layouts.app')
@section('home')
@section('content')

<table class="table ">
    <thead>




        <tr>
            <th scope="col">#</th>
            <th scope="col">nama</th>
            <th scope="col">kelas</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @php($number = 1)
        @foreach($post as $d)
        <tr>
            <th scope="row">{{$number}}</th>
            <td>{{$d -> title}}</td>
            <td>{{$d -> description}}</td>


            </td>

        </tr>
        </tr>
        @php($number++)
        @endforeach
    </tbody>

</table>

<a class="btn btn-primary" href="{{url('')}}">add </a>
@endsection