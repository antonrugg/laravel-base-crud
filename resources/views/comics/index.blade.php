@forelse ($comics as $comic)
    <div>
        <h2> {{ $comic->title }} </h2>
        <img src="{{$comic->thumb}}" alt="{{$comic->series}}">
        <p>{{ $comic->price }} - <span>{{ $comic->series }}</span></p>
        <p><a href="{{ route('comics.show', $comic->id) }}">View more infos</a></p>
        <p><a href="{{ route('comics.create', $comic->id) }}">Add one</a></p>
        <p><a href="{{ route('comics.edit', $comic->id) }}">Edit</a></p>
        <form action="{{ route('comics.destroy', $comic->id) }}"
            method="post">
            @csrf

            @method('delete')

            <input type="submit" value="Cancella">
        </form>
    </div>

@empty
    <h1>Il nostro store ha preso fuoco, è stata mandata una squadra di scimmie a spegnere l'incendio!</h1>
@endforelse
