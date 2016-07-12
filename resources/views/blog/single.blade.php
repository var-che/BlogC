@extends('layouts.master')

@section('title', "| $post->title")

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <h1>{{ $post->title }}</h1>
            <p id='blog-content'>{{ $post->body }}</p>
        </div>
    </div>
    
@endsection    