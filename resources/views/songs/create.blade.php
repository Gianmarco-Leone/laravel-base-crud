@extends('layouts.app')

@section('page_name', 'Aggiungi')

@section('page_title', 'Aggiungi brano')

@section('main_content')

    {{-- Se ci sono presenti errori nella compilazione del form --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <h5>Durante l'invio del form sono stati riscontrati i seguenti errori:</h5>
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
                        <input type="text" class="@error('title') is-invalid @enderror form-control" id="title" name="title" value="{{old('title')}}">
                        @error('title')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            
                <div class="col-6">
                    <div class="mb-3">
                        <label for="album" class="form-label">Album</label>
                        <input type="text" class="@error('album') is-invalid @enderror form-control" id="album" name="album" value="{{old('album')}}">
                        @error('album')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            
                <div class="col-5">
                    <div class="mb-3">
                        <label for="author" class="form-label">Autore</label>
                        <input type="text" class="@error('author') is-invalid @enderror form-control" id="author" name="author" value="{{old('author')}}">
                        @error('author')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            
                <div class="col-2">
                    <div class="mb-3">
                        <label for="length" class="form-label">Durata</label>
                        <input type="number" step="0.01" class="@error('length') is-invalid @enderror form-control" id="length" name="length" value="{{old('length')}}">
                        @error('length')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-5">
                    <div class="mb-3">
                        <label for="editor" class="form-label">Editore</label>
                        <input type="text" class="@error('editor') is-invalid @enderror form-control" id="editor" name="editor" value="{{old('editor')}}">
                        @error('editor')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-4">
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="poster" class="form-label">Copertina (link immagine)</label>
                        <textarea class="@error('poster') is-invalid @enderror form-control" id="poster" name="poster" rows="5">{{old('poster')}}</textarea>
                        @error('poster')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 d-flex">
            <button type="submit" class="btn btn-primary ms-auto mt-3">
                Salva
            </button>
        </div>

    </form>

@endsection