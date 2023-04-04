@extends('layouts.app')

@section('page_name', 'Lista')

@section('cdn')
{{-- FONT AWESOME --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

@section('page_title', 'Lista Brani')

@section('main_content')

<div class="row align-items-center">
    <div class="col-8">
        <form class="d-flex my-3" role="search">
            <input class="form-control me-2" type="search"  name="term" placeholder="Cerca brano..." aria-label="Search">
            <button class="btn btn-primary">Cerca</button>
        </form>
    </div>
    <div class="col-4 d-flex">
        <a class="btn btn-primary ms-auto" href="{{route('songs.create')}}">
        Aggiungi brano</a>
    </div>
</div>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Album</th>
            <th scope="col">Autore</th>
            <th scope="col">Editore</th>
            <th scope="col" class="text-center">Action</th>
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
            <td class="text-center">
                <a href="{{route('songs.show', ['song'=>$song])}}">
                {{-- 
                In forma abbreviata sarebbe:
                <a href="{{route('songs.show', $song)}}"> 
                --}}
                    <i class="fa-solid fa-circle-info"></i>
                </a>

                <a href="{{route('songs.edit', $song)}}" class="mx-2">
                    <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination-control">
    {{$songs->links('pagination::bootstrap-5')}}
</div>
@endsection