@extends('layouts.dashboard')
@section('content')

    <div class="text-center">
        <h1>Crea un post</h1>
    </div>

    <form action="{{route('admin.posts.store')}}" method="POST">

        @csrf


        <div>
            <label for="">Titolo</label>
            <input type="text" name="title"  class="form-control @error('title') is-invalid @enderror">
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
            <textarea  name="body"  class="form-control @error('title') is-invalid @enderror" rows="5"></textarea>
            @error('body')
                {{-- <div class="alert alert-danger">
                    {{$message}}
                </div> --}}
                <div class="text-danger">
                    {{$message}}
                </div>
            @enderror

        </div>

        <button  class="btn btn-primary mt-3" type="submit">Crea</button>

    </form>

@endsection
