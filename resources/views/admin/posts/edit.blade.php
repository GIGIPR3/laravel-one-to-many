@extends('layouts.dashboard')
@section('content')

    <div class="text-center">
        <h1>Modifica un post</h1>
    </div>

    <form action="{{route('admin.posts.update', $post->id)}}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label for="">Titolo</label>
            <input value="{{$post->title}}" type="text" name="title"  class="form-control @error('title') is-invalid @enderror">
            @error('title')
                {{-- <div class="alert alert-danger">
                    {{$message}}
                </div> --}}
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div class="mt-4">
            <label for="">Body</label>
            <textarea  name="body"  class="form-control @error('title') is-invalid @enderror" rows="5">{{$post->body}}</textarea>
            @error('body')
                {{-- <div class="alert alert-danger">
                    {{$message}}
                </div> --}}
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror

        </div>

        <button  class="btn btn-primary mt-3" type="submit">Modifica</button>

    </form>

@endsection
