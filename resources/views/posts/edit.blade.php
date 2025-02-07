@extends('layouts.app')

@section('title') Edit @endsection

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card shadow-lg p-4 rounded-4" style="width: 50rem; background-color: #f8f9fa;">
        <h2 class="text-center text-warning">Edit Post</h2>

        <form method="POST" action="{{route('posts.update', $post->id)}}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-bold text-primary">Title</label>
                <input name="title" type="text" value="{{$post->title}}" class="form-control rounded-pill shadow-sm">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold text-primary">Description</label>
                <textarea name="description" class="form-control rounded-3 shadow-sm" rows="3">{{$post->description}}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold text-primary">Post Creator</label>
                <select name="post_creator" class="form-control rounded-pill shadow-sm">
                    @foreach($users as $user)
                        <option @selected($post->user_id == $user->id) value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="text-center">
                <button class="btn btn-warning btn-lg rounded-pill shadow">Update</button>
            </div>

        </form>
    </div>
</div>

@endsection