@extends('layouts.app')

@section('page_content')
    Benvenuti nel nostro negozio di fumetti.
    Scelgi tra uno di questi:

    @foreach ($comics as $comic)
        <h1>{{ $comic['title'] }}</h1>
        <a href="{{ route("comics.show", $comic->id) }}" class="btn">Show</a>
    @endforeach

    
@endsection