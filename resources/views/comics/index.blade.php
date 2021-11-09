<h1>asdas</h1>
@extends('layout.main')
@section('content')
    @foreach($comics as $comic)
        <div>
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->url}}" width="200" alt="">
            <a href="{{route('comics.show', ['id'=>$comic->id])}}">Read More</a>
            <h3>{{$comic->author}}</h3>
        </div>       
    @endforeach  
@endsection