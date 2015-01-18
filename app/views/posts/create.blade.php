@extends('layouts.default')

@section('content')
    <h2>Create new post</h2>
	{{ Form::open(array('action' => 'PostsController@store')) }}
    	<div>
    		{{ Form::label('title', 'Title') }}
			{{ Form::text('title') }}
            {{ $errors->first('title') }}
    	</div>

    	<div>
    		{{ Form::label('body', 'Body') }}
			{{ Form::text('body') }}
            {{ $errors->first('body') }}
    	</div>
    	<div>
    		{{ Form::submit('Create ') }}
    	</div>
	{{ Form::close() }}
@stop