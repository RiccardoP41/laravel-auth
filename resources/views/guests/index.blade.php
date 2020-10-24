@extends('layouts.app')
@section('content')

    <div class="container">

            <div class="row">
                @foreach ($posts as $post)

                        <div class="col-sm-4 pt-3">
                            <div class="card">
                                <img src="{{Storage::url($post->img)}}" class="card-img-top" alt="{{$post->title}}">
                                <div class="card-body">
                                    <h5 class="card-title"{{$post->title}}</h5>
                                    <p class="card-text">{{Str::substr($post->body,0,300). '...'}}</p>
                                    <button href="{{route('posts.guest.show',$post->slug)}}" type="button" class="btn btn-link">Leggi di più</button>
                                    <p class="card-text"><small class="text-muted">{{$post->user->name}}</small></p>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>

    </div>

@endsection
