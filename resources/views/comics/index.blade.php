
@extends('layout.main')
@section('content')
    <a href="{{route('comics.create')}}" class="btn btn-primary">Aggiungi un fumetto</a>
    @if(session('delete'))
        <div class="alert alert-success" role="alert">
            {{session('delete') }} è stato eliminato con successo!
        </div>
    @endif
    <form method="GET">
        <div class="input-group ">   
            <input type="text" class="form-control"  placeholder="Cerca..." name="search">
            <button class="btn btn-primary" type="submit">Cerca</button>
        </div>
    </form>
    <div class="index-container-wrap">
        @foreach($comics as $comic)
            <div class="index-container">
                <h2>{{$comic->title}}</h2>
                <a href="{{route('comics.edit', $comic)}}" class="btn-sm"><i class="far fa-edit"></i></a>
                <a href="">
                    <form method="POST" action="{{route('comics.destroy', $comic)}}" class="delete-form" data-comic-id="{{$comic->id}}" data-comic-title="{{$comic->title}}">
                        @csrf
                        @method('DELETE')
                        <button class="fas fa-trash"></button>
                    </form>
                </a>
                <a href="{{route('comics.show', $comic)}}">
                    <img src="{{$comic->url}}" width="200" alt="">
                </a>
                <h3>{{$comic->author}}</h3>
            </div>       
        @endforeach  
    </div>
@endsection

@section('scripts-section')
    
    <script >
        const deleteFormElements = document.querySelectorAll('.delete-form');
        deleteFormElements.forEach(form =>{
            form.addEventListener('submit', function(event){
                event.preventDefault();
                const id = form.getAttribute('data-comic-id');
                const title = form.getAttribute('data-comic-title');
                const confirm = window.confirm(`Sei sicura/o di voler eliminare  ${title} dalla lista?`);
                if(confirm){
                    this.submit();
                }
            })
        })
    </script>
@endsection

