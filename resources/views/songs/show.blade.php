@extends('layouts.app')

@section('page_name', 'Brano')

@section('page_title', 'Brano: ' . $song->title)

@section('main_content',)
<div class="row justify-content-center my-5">
    <div class="col-4">
        <div class="my-card text-center">
            <figure>
                <img src="{{$song->poster}}" alt="{{$song->title}} poster">
            </figure>

            <ul class="p-0 my-3">
                <li>{{$song->album}}</li>
                <li>{{$song->author}}</li>
                <li>{{$song->editor}}</li>
                <li>{{$song->length}} m</li>
            </ul>
        </div>
    </div>
</div>

<div class="text-center">
    <a class="btn btn-dark" href="{{route('songs.index')}}">Torna alla lista</a>
</div>
@endsection