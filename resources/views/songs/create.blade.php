@extends('layouts.app')

@section('page_name', 'Aggiungi')

@section('page_title', 'Aggiungi brano')

@section('main_content')

{{-- Se ci sono presenti errori nella compilazione del form --}}
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('songs.store')}}" method="POST" class="row">
    @csrf

    <div class="col-8">
        <div class="row">
            <div class="col-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp">
                </div>
            </div>
        
            <div class="col-6">
                <div class="mb-3">
                    <label for="album" class="form-label">Album</label>
                    <input type="text" class="form-control" id="album" name="album" aria-describedby="emailHelp">
                </div>
            </div>
        
            <div class="col-5">
                <div class="mb-3">
                    <label for="author" class="form-label">Autore</label>
                    <input type="text" class="form-control" id="author" name="author" aria-describedby="emailHelp">
                </div>
            </div>
        
            <div class="col-2">
                <div class="mb-3">
                    <label for="length" class="form-label">Durata</label>
                    <input type="number" step="0.01" class="form-control" id="length" name="length" aria-describedby="emailHelp">
                </div>
            </div>

            <div class="col-5">
                <div class="mb-3">
                    <label for="editor" class="form-label">Editore</label>
                    <input type="text" class="form-control" id="editor" name="editor" aria-describedby="emailHelp">
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label for="poster" class="form-label">Copertina (link immagine)</label>
                    <textarea class="form-control" id="poster" name="poster" aria-describedby="emailHelp" rows="5"></textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 d-flex">
        <button type="submit" class="btn btn-outline-dark ms-auto mt-3">
            Salva
        </button>
    </div>

</form>

@endsection