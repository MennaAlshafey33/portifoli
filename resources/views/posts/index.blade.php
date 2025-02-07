@extends('layouts.app')

@section('title') Index @endsection

@section('content')

<div class="container mt-4">
    <div class="text-center mb-4">
        <a href="{{route('posts.create')}}" class="btn btn-success btn-lg rounded-pill shadow">➕ Create Post</a>
    </div>

    <div class="card shadow-lg rounded-4 p-4 bg-light">
        <table class="table table-hover table-striped text-center align-middle">
            <thead class="table-dark rounded">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Posted By</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td class="fw-bold">{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user ? $post->user->name : 'Not Found'}}</td>
                    <td>{{$post->created_at->format('Y-m-d')}}</td>
                    <td>
                        <a href="{{route('posts.show', $post->id)}}" class="btn btn-info btn-sm rounded-pill shadow-sm">👀 View</a>
                        <a href="{{route('posts.edit', $post->id)}}" class="btn btn-primary btn-sm rounded-pill shadow-sm">✏️ Edit</a>

                        <form style="display: inline;" method="POST" action="{{route('posts.destroy', $post->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm rounded-pill shadow-sm">🗑 Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection