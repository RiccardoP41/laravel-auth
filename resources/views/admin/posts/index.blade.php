@extends('layouts.app')
@section('content')
    @if (session('status'))
        {{-- <div class="alert  {{ (? 'alert-success' : 'alert-warning')}} "> --}}
        <div class="alert  alert-success">
            {{ session('status') }}
        </div>
    @endif


    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titolo</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
      @foreach ($posts as $post)
      <tr>
          <th scope="row">{{$post->id}}</th>
          <td>{{$post->title}}</td>
          <td><a href="{{route('posts.edit', $post->id)}}">Edit</a></td>
          <td>
              <form class="" action="{{route('posts.destroy', $post->id)}}" method="post">
              @csrf
              @method('DELETE')
              {{-- <button type="submit" name="button">Cancella</button> --}}
              <button type="submit" class="btn btn-primary">Cancella</button>
          </form>
       </td>
      </tr>
  @endforeach
  </tbody>
</table>
<div class="pagination mt-5 justify-content-center">
    {{$posts->links()}}    
</div>

@endsection
