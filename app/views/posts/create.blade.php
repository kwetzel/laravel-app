@extends('layout')

@section('content')
	{{ Form::open(array('action' => 'PostsController@store')) }}
    	<div>
    		{{ Form::label('title', 'Title') }}
			{{ Form::text('title') }}
    	</div>

    	<div>
    		{{ Form::label('body', 'Body') }}
			{{ Form::text('body') }}
    	</div>
    	<div>
    		{{ Form::submit('Create post') }}
    	</div>
	{{ Form::close() }}
@stop