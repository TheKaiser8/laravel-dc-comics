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
                <input type="text" class="form-control" id="title" name="title" maxlength="100" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie*</label>
                <input type="text" class="form-control" id="series" name="series" maxlength="100" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Genere*</label>
                <input type="text" class="form-control" id="type" name="type" maxlength="50" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">Data di uscita*</label>
                <input type="date" class="form-control" id="date" name="sale_date" min="0" value="" max="2023-01-20" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control" id="price" name="price" min="0" value="" step=".01" max="9999.99" placeholder="10.99" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Link immagine copertina</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <button type="submit" class="btn btn-primary">Invia dati fumetto inserito</button>
            <button type="reset" class="btn btn-secondary">Pulisci i campi</button>
            <a href="{{ route('comics.index') }}" class="btn btn-light">Torna all'archivio</a>
        </form>
    </section>
@endsection