@extends('layouts.main')

@section('page-title')
    Fumetto
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Dettagli fumetto</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary my-3">Torna all'archivio</a>
        <div class="card d-flex flex-row">
            <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
            <div class="card-body">
                <h3 class="card-title fw-bold">{{ $comic->title }}</h3>
                <p class="card-text">{{ $comic->description }}</p>
                <ul class="list-unstyled">
                    <li><strong>Serie:</strong> {{ $comic->series }}</li>
                    <li><strong>Genere:</strong> {{ $comic->type }}</li>
                    <li><strong>Data di uscita:</strong> {{ $comic->sale_date }}</li>
                    <li><strong>Prezzo:</strong> {{ $comic->price }}€</li>
                </ul>
            </div>
        </div>
    </section>
@endsection