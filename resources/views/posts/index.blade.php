@extends('layouts/master')
@section('title', '| All posts')
@section('content')
    <div class='row'>
        <div class='col-md-10'>
            <h1>See all posts</h1>
        </div>
        <div class='col-md-2'>
            <a href=" {{route('posts.create')}} " class='btn btn-lg btn-block btn-primary btn-h1-spacing'>Create new</a>
        </div>
        <div class='col-md-12'>
            <hr>
        </div>
    </div>
    <div class='row'>
        <div class='col-md-12'>
            <table class='table'>
                <thead>
                    <th>#</th>
                    <th>title</th>
                    <th>body</th>
                    <th>created at</th>
                    <th></th>
                </thead>
                <tbody>
                    
                    @foreach ($posts as $postr)
                    
                        <tr>
                            <th>{{ $postr->id }}</th>
                            <td>{{ $postr->title }}</td>
                            <td>{{ substr($postr->body,0 ,50) }}{{ strlen($postr->body)>50 ? "..." : "" }}</td>
                            <td>{{ $postr->created_at }}</td>
                            <td><a href="{{ route('posts.show',$postr->id) }}" class='btn btn-default'>View</a><a href="{{ route('posts.edit',$postr->id) }}" class='btn btn-default'>Edit</a></td>
                        </tr>    
                    @endforeach
                    
                </tbody>
            </table>
            <div class='text-center'>
                {!! $posts->links(); !!}
            </div>
        </div>
    </div>
@endsection    