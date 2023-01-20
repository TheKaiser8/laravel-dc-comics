@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Archivio fumetti</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Genere</th>
                    <th scope="col">Data di uscita</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->price }}€</td>
                    <td><a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">Mostra dettagli</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi nuovo fumetto</a>
    </section>
@endsection