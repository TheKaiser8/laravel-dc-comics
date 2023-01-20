@extends('layouts.main')

@section('page-title')
    Homepage
@endsection

@section('page-content')
    <section class="container">
        <h1 class="text-center">Archivio fumetti</h1>
        <table class="table table-striped align-middle">
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
                    <td>
                        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-info">Mostra dettagli</a>
                        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>

                        <!-- Button modale (modalDelete) -->
                        <button type="button" class="btn btn-danger mt-1" data-bs-toggle="modal" data-bs-target="#modalDelete">Cancella</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modale (modalDelete) -->
        <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalDeleteLabel">Cancellazione elemento</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Confermi di voler cancellare definitivamente questo elemento?</div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No, torna indietro</button>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" class="btn btn-danger">Sì, cancella</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <a href="{{ route('comics.create') }}" class="btn btn-success">Aggiungi nuovo fumetto</a>
    </section>
@endsection