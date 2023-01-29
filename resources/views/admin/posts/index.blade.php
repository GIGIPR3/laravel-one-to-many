@extends('layouts.dashboard')
@section('content')
    {{-- <h1>pagina dei post</h1> --}}

    <a href="{{route('admin.posts.create')}}">
        <button type="button" class="btn btn-success mb-3">Crea nuovo post</button>
    </a>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">
                        Title
                <th scope="col">Body</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th>{{ $post->id }}</th>
                    <td>
                        <a href="{{route('admin.posts.show', $post->id)}}">
                            {{ $post->title }}
                        </a>
                    </td>
                    <td>{{ $post->body }}</td>
                    <td>
                        <a href="{{route('admin.posts.edit', $post->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
                        <form method="POST" action="{{ route('admin.posts.destroy', $post->id) }}">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger mt-2">Delete</button>
                        </form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>





    {{-- @foreach ($posts as $post)
        <div>
            {{ $post->title }}
        </div>
    @endforeach --}}
    <div class="d-flex align-items-center justify-content-center">
        {{ $posts->links() }}
    </div>

@endsection
