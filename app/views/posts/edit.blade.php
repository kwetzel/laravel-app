@extends('layouts.default')

@section('content')
    <h2>Edit post</h2>
	{{ Form::model($post,array('action' => array('PostsController@update',$post->id), 'method' => 'put')) }}
    	<div>
    		{{ Form::label('title', 'Title') }}
			{{ Form::text('title') }}
    	</div>

    	<div>
    		{{ Form::label('body', 'Body') }}
			{{ Form::text('body') }}
    	</div>
    	<div>
    		{{ Form::submit('Update post') }}
    	</div>
	{{ Form::close() }}
@stop