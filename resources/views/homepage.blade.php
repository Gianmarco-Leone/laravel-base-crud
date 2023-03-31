@extends('layouts.app')

@section('page_name', 'Home')

@section('page_title', 'Home')

@section('main_content',)
<p>
  Applicazione Laravel per la gestione di un archivio di brani musicali.
  <br>
  <span class="text-decoration-underline">
    Apri il menu a tendina nella navbar per visualizzare l'archivio oppure
  </span>
  <br>
  <a class="btn btn-dark my-5" href="{{route('songs.index')}}">
    Clicca qui
  </a>
</p>
@endsection