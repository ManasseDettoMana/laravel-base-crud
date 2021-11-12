@extends('layout.main')

@section('content')
    <a href="{{route('comics.index')}}">Torna indietro</a>
    <div class="d-flex justify-contet-between">
        <h2>Modifica {{$comic->name}}</h2>   
    </div>    
    <div>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-12 mb-3">
                    <label for="title" class="form-label me-5">Inserisci il titolo</label>
                    <input class="form-control" type="text" id="title" name="title" placeholder="Titolo" required value="{{$comic->title}}">
                </div>
                <div class="col-12 mb-3">
                    <label for="url" class="form-label">Inserisci il link dell'immagine</label>
                    <input class="form-control" type="text" id="url" name="url" placeholder="url immagine" value="{{$comic->url}}">
                </div>
                <div class="col-12 mb-3">
                    <label for="author" class="form-label">Inserisci l'autore</label>
                    <input class="form-control" type="text" id="author" name="author" placeholder="autore" required value="{{$comic->author}}">
                </div>
                <div class="col-12 mb-3">
                    <label for="description" class="form-label">Inserisci la descrizione</label>
                    <input class="form-control" type="text" id="description" name="description" placeholder="descrizione..." required value="{{$comic->description}}">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Accetta modidiche</button>
                </div>
            </div>
        </form>
    </div>
@endsection