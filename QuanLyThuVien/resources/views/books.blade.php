<div>

    {{ $books }}
    <p>===========================================</p>

    @foreach($books as $book)
        <div class="row">
            {{$book->bookID}}
        </div>
        <div class="row">
            {{$book->bookName}}
        </div>
        <div class="row">
            {{$book->NXB}}
        </div>
    @endforeach
</div>