<h1>asdas</h1>

@foreach($comics as $comic)
    <p>{{$comic->title}}</p>
    <p>{{$comic->author}}</p>
    <p>{{$comic->description}}</p>
    
    <img src="{{$comic->url}}" alt="">

@endforeach