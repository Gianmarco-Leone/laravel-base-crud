@extends('layouts.app')

@section('page_name', 'Brano')

@section('page_title', 'Brano: ' . ucfirst($song->title))

@section('main_content',)
<div class="row justify-content-center my-5">
    <div class="col-4">
        @include('partials._song_detail_card')
    </div>
</div>

<div class="text-center">
    <a class="btn btn-primary" href="{{route('songs.index')}}">Torna alla lista</a>
</div>
@endsection