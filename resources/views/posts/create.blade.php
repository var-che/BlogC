<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Blog</title>
    <!-- CHANGE THIS TITLE FOR EACH PAGE -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body>
      <div class='row'>
          <div class='col-md-8 col-md-offset-2'>
              <h1> Create new post </h1>
              <hr>
              {!! Form::open(array('route' => 'posts.store')) !!}
              {{Form::label('title', 'Title')}}
              {{Form::text('title',null,array('class'=>'form-control','style'=>'margin-bot:20px'))}}
              
              {!! Form::label('slug', 'Slug:') !!}
              {!! Form::text('slug', null,['class'=>'form-control','style'=>'margin-bot:20px']) !!}
              
              {{Form::label('body','Ovde ide text')}}
              {{ Form::textarea('body',null,array('class'=>'form-control')) }}
              
              {{ Form::submit('Submit post', array('class'=>'btn btn-success btn-lg btn-block','style'=>'margin-top:20px')) }}
              {!! Form::close() !!}
          </div>
      </div>
  </body>
</html>  