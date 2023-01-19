@extends('layouts.main')

@section('page-title')
    Fumetto
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Dettagli fumetto</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-secondary my-3">Torna all'archivio</a>
        <h2>{{ $comic->title }}</h2>
        <p>{{ $comic->description }}</p>
    </section>
@endsection