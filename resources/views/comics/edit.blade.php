@extends('layouts.main')

@section('page-title')
    Il tuo fumetto
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Aggiungi un nuovo fumetto</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="100" value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie*</label>
                <input type="text" class="form-control" id="series" name="series" maxlength="100" value="{{ $comic->series }}" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere*</label>
                <input type="text" class="form-control" id="type" name="type" maxlength="50" value="{{ $comic->type }}" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data di uscita*</label>
                <input type="date" class="form-control" id="date" name="sale_date" min="0" max="2023-01-20" value="{{ $comic->sale_date }}" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control" id="price" name="price" min="0" value="{{ $comic->price }}" step=".01" max="9999.99" placeholder="10.99" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Link immagine copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <button type="submit" class="btn btn-primary">Invia dati fumetto modificato</button>
        </form>
    </section>
@endsection