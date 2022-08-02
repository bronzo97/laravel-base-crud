@extends('layouts.app')

@section('page_content')
    <h2>{{ $comic->title }}</h2>
    <p>{{ $comic->description }}</p>
    <p>{{ $comic->price}}</p>
    <p>{{ $comic->series }}</p>
    <p>{{ $comic->type }}</p>
    <p>{{ $comic->sale_date }}</p>
@endsection