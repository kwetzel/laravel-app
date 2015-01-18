@extends('layouts.default')

@section('content')
    <h2>Show post</h2>
    <h4>{{ $post->title,
    		" (",
	    	link_to_route('posts.edit', 'edit', array('id' => $post->id)),
	    	")"
    	}}</h4
    <p>{{ $post->body }}</p>
    {{ Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) }}
        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
    {{ Form::close() }}
@stop