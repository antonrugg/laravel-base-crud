<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <script type="text/javascript" src="{{ asset('js/delete.js') }}" defer></script>
</head>
<body>


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

            <button class="deleted">Cancella</button>
        </form>
    </div>

@empty
    <h1>Il nostro store ha preso fuoco, è stata mandata una squadra di scimmie a spegnere l'incendio!</h1>
@endforelse
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>

