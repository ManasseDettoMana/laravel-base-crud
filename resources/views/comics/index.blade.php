<h1>asdas</h1>

@foreach($comics as $comic)
    <div>
        <h2>{{$comic->title}}</h2>
        <img src="{{$comic->url}}" width="200" alt="">
        <a href="{{route('comics.show', ['id'=>$comic->id])}}">Read More</a>
        <h3>{{$comic->author}}</h3>
        <!-- <p>{{$comic->description}}</p> -->
    </div>
    

@endforeach