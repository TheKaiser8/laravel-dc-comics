@extends('layouts.main')

@section('page-title')
    Il tuo fumetto
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Modifica fumetto</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="100" value="{{ old('title', $comic->title) }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie*</label>
                <input type="text" class="form-control" id="series" name="series" maxlength="100" value="{{ old('series', $comic->series) }}" required>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere*</label>
                <input type="text" class="form-control" id="type" name="type" maxlength="50" value="{{ old('type', $comic->type) }}" required>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data di uscita*</label>
                <input type="date" class="form-control" id="date" name="sale_date" min="0" max="2023-01-23" value="{{ old('sale_date', $comic->sale_date) }}" required>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control" id="price" name="price" min="0" value="{{ old('price', $comic->price) }}" step=".01" max="9999.99" placeholder="10.99" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Link immagine copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Invia dati fumetto modificato</button>
            <a href="{{ route('comics.index') }}" class="btn btn-light">Torna all'archivio</a>
        </form>
    </section>
@endsection