
@extends('layout.main')
@section('content')
    <div class="index-container-wrap">
        @foreach($comics as $comic)
            <div class="index-container">
                <h2>{{$comic->title}}</h2>
                
                <a href="{{route('comics.show', $comic)}}">
                    <img src="{{$comic->url}}" width="200" alt="">
                </a>
                <h3>{{$comic->author}}</h3>
            </div>       
        @endforeach  
    </div>
@endsection