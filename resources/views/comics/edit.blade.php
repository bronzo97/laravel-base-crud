@extends('layouts.app')

@section("page_content")
    <form action="{{ route("comics.store") }}" method="post">
    @csrf
        
        <div>
            <label for="titleInput">Titolo fumetto</label>
            <input type="text" name="title" id="titleInput" placeholder="Titolo Fumetto" value="{{ old('title') ?? $comic->title }}">
        </div>

        <div>
            <label for="descriptionInput">Descrizione fumetto</label>
            <input type="text" name="description" id="descriptionInput" placeholder="Descrizione Fumetto" value="{{ old('description') ?? $comic->description }}">
        </div>

        <div>
            <label for="priceInput">Prezzo fumetto</label>
            <input type="number" name="price" id="priceInput" placeholder="Prezzo Fumetto" value="{{ old('price') ?? $comic->price }}">
        </div>

        <div>
            <label for="serieInput">Serie fumetto</label>
            <input type="text" name="series" id="serieInput" placeholder="Serie Fumetto" value="{{ old('series') ?? $comic->series }}">
        </div>

        <div>
            <label for="typeInput">Tipo fumetto</label>
            <input type="text" name="type" id="typeInput" placeholder="Tipo Fumetto" value="{{ old('type') ?? $comic->type }}">
        </div>

        <div>
            <label for="saleDateInput">Data di vendita fumetto</label>
            <input type="date" name="sale_date" id="saleDateInput" placeholder="Data di vendita Fumetto" value="{{ old('sale_date') ?? $comic->sale_date }}">
        </div>

        <div>
            <button type="submit" class="btn">Modifica</button>
            <a href="{{ route('comics.index') }}" class="btn">Annulla</a>
        </div>


    </form>

    
@endsection
