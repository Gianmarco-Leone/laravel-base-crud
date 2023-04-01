@extends('layouts.app')

@section('page_name', 'Lista')

@section('page_title', 'Lista Brani')

@section('main_content',)
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Album</th>
            <th scope="col">Autore</th>
            <th scope="col">Editore</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($songs as $song)
        <tr>
            <th scope="row">{{$song->id}}</th>
            <td>{{ucfirst($song->title)}}</td>
            <td>{{ucfirst($song->album)}}</td>
            <td>{{$song->author}}</td>
            <td>{{$song->editor}}</td>
            <td class="ps-4">
                <a href="{{route('songs.show', ['song'=>$song])}}">
                {{-- 
                In forma abbreviata sarebbe:
                <a href="{{route('songs.show', $song)}}"> 
                --}}
                <i class="fa-solid fa-circle-info text-white"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination-control">
    {{$songs->links()}}
</div>
@endsection