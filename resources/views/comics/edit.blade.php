<form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf

    @method('put')

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title"
        value="{{ $comic->title }}">
    </div>
    <div>
       <textarea name="description" id="" cols="30" rows="10">
        {{ $comic->description }}
       </textarea>
    </div>
    <div>
        <label for="thumb">Thumb</label>
        <input type="text" name="thumb" id="thumb"
        value="{{ $comic->thumb }}">
    </div>
    <div>
        <label for="price">Price</label>
        <input type="text" name="price" id="price"
        value="{{ $comic->price }}">
    </div>
    <div>
        <label for="series">Series</label>
        <input type="text" name="series" id="series"
        value="{{ $comic->series }}">
        >
    </div>
    <div>
        <label for="sale_date">Sale Date</label>
        <input type="text" name="sale_date" id="sale_date"
        value="{{ $comic->sale_date }}">
        >
    </div>
    <div>
        <label for="type">Type</label>
        <input type="text" name="type" id="type"
        value="{{ $comic->type }}">
        >
    </div>
    <input type="submit" value="Invia">

</form>
