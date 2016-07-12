@extends('layouts/master')

@section('title',' | Blog main')

@section('content')

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>
            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8">
          
          @foreach ($posts as $post)
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">{{$post->title}}</h3>
            </div>
            <div class="panel-body">
              {{substr($post->body, 0, 300)}}{{strlen($post->body)>300? "..." : ""}}
            </div>
          </div>
          @endforeach
          <hr>
        </div>

        <div class="col-md-3 col-md-offset-1">
          <h2>Sidebar</h2>
        </div>
      </div>
@endsection
