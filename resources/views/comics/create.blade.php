@extends('layouts.main')

@section('page-title')
    Il tuo fumetto
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Aggiungi un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" maxlength="100" value="{{ old('title') }}" required>
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie*</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" maxlength="100" value="{{ old('series') }}" required>
                @error('series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere*</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" maxlength="50" value="{{ old('type') }}" required>
                @error('type')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data di uscita*</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="date" name="sale_date" value="{{ old('sale_date') }}" max="2023-01-23" required>
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" min="0" value="{{ old('price') }}" step=".01" max="9999.99" placeholder="10.99" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Link immagine copertina</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Invia dati fumetto inserito</button>
            <button type="reset" class="btn btn-secondary">Pulisci i campi</button>
            <a href="{{ route('comics.index') }}" class="btn btn-light">Torna all'archivio</a>
        </form>
    </section>
@endsection