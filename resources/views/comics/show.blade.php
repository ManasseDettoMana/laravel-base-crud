<p>asda</p>
<a href="{{route('comics.index')}}">Back to comics</a>

<div>
    <h2>{{$comic->title}}</h2>
    <img src="{{$comic->url}}" width="200" alt="">
    <h3>{{$comic->author}}</h3>
    <p>{{$comic->description}}</p>
</div>