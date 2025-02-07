@extends('layouts.app')

@section('title') Show @endsection

@section('content')

<div class="container mt-4 d-flex flex-column align-items-center">
    <!-- Post Info Card -->
    <div class="card shadow-lg p-4 rounded-4 mb-4" style="width: 50rem; background-color: #e3f2fd;">
        <div class="card-header text-white bg-primary rounded-top">
            <h4 class="mb-0">📝 Post Info</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title fw-bold">📌 Title:</h5>
            <p class="card-text">{{$post->title}}</p>
            
            <h5 class="card-title fw-bold">📖 Description:</h5>
            <p class="card-text">{{$post->description}}</p>
        </div>
    </div>

    <!-- Post Creator Info Card -->
    <div class="card shadow-lg p-4 rounded-4" style="width: 50rem; background-color: #d4edda;">
        <div class="card-header text-white bg-success rounded-top">
            <h4 class="mb-0">👤 Post Creator Info</h4>
        </div>
        <div class="card-body">
            <h5 class="card-title fw-bold">🆔 Name:</h5>
            <p class="card-text">{{$post->user ? $post->user->name : 'Not Found'}}</p>

            <h5 class="card-title fw-bold">📧 Email:</h5>
            <p class="card-text">{{$post->user ? $post->user->email : 'Not Found'}}</p>

            <h5 class="card-title fw-bold">📅 Created At:</h5>
            <p class="card-text">{{$post->user ? $post->user->created_at->format('Y-m-d H:i:s') : 'Not Found'}}</p>
        </div>
    </div>
</div>

@endsection