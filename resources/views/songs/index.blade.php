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
        </tr>
    </thead>
    <tbody>
        @foreach($songs as $song)
        <tr>
            <th scope="row">{{$song->id}}</th>
            <td>{{$song->title}}</td>
            <td>{{$song->album}}</td>
            <td>{{$song->author}}</td>
            <td>{{$song->editor}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection