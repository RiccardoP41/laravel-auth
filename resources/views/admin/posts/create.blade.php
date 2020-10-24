@extends('layouts.app')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" name="title" class="form-control" placeholder="Inserisci il titolo">
            </div>
            <div class="form-group">
                <label for="img">Immagine</label>
                <input type="file" name="img" class="" accept="image/">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" rows="3" placeholder="Inserisci il testo"></textarea>
            </div>
            <div class="form-group">
                @foreach ($tags as $tag)
                    <label for="tag">{{$tag->name}}</label>
                    <input type="checkbox" name="tags[]" value="{{$tag->id}}">
                @endforeach
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


@endsection
