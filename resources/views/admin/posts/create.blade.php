@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="{{route('posts.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" rows="3" placeholder="Inserissci il testo"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
