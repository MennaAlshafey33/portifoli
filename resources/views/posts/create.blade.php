@extends('layouts.app')

@section('title') Create @endsection

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card shadow-lg p-4 rounded-4" style="width: 50rem; background-color: #f8f9fa;">
        <h2 class="text-center text-primary">Create New Post</h2>

        @if ($errors->any())
            <div class="alert alert-danger rounded-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{route('posts.store')}}">
            @csrf
            <div class="mb-3">
                <label class="form-label fw-bold">Title</label>
                <input name="title" type="text" class="form-control rounded-pill shadow-sm" value="{{old('title')}}">
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Description</label>
                <textarea name="description" class="form-control rounded-3 shadow-sm" rows="3">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label fw-bold">Post Creator</label>
                <select name="post_creator" class="form-control rounded-pill shadow-sm">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="text-center">
                <button class="btn btn-success btn-lg rounded-pill shadow">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection