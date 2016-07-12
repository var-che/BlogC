@extends('layouts/master')
@section('$post->title',  '{{ $post->title }}')
@section('content')

    	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method'=>'PUT']) !!}
		<div class="col-md-10 col-md-offset-1">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
			
			{{ Form::label('slug','Slug:') }}
			{{ Form::text('slug', null, ['class' => 'form-control']) }}
			
			{{ Form::label('body', "Body:", ['class' => 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			<hr>
		</div>
		
        <div class='row'>
            
           <div class="col-md-10 col-md-offset-1">
			<div class="well">
				<dl class="dl-vertical">
					<dt>Created At:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>

				<dl class="dl-vertical">
					<dt>Last Updated:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
				    <div class="col-sm-6">
				        {{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) }}
					</div>
					
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
					</div>
					<div class='row'>
					    <div class='col-sm-12'>
					        <br>
					        {!! Html::linkRoute('posts.index', '<<< Back to all posts', [], ['class'=>'btn btn-default btn-block']) !!}
					    </div>
					</div>
				</div>

			</div>
		</div> 
        </div>
		
		{!! Form::close() !!}
	</div>	<!-- end of .row (form) -->

@stop