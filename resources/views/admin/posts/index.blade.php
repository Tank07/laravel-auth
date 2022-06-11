@extends('layouts.app')

@section('content')

    <table class="table">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Image</th>
            <th scope="col">Slug</th>
            <th scope="col">Buttons</th>
        </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)

            <tr>
                <th scope="row">{{$post->title}}</th>
                <td>{{$post->content}}</td>
                <td> <img src="{{$post->image}}" alt=""> </td>
                <td>{{$post->slug}}</td>
                <td><a href="{{route('admin.posts.show', $post->id)}}"class="btn btn-info">Show</a></td>
              </tr>
                
            @empty

            <h1>Non sono presenti post</h1>
                
            @endforelse
        
        </tbody>
    </table>

@endsection


@section('scripts')

@endsection
