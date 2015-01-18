@extends('layout')

@section('content')
	{{-- link_to_action('PostsController@create', 'Create new post') --}}
    <h4>{{ $post->title,
    		" (",
	    	link_to('posts/'.$post->id.'/edit', 'edit'),
	    	")"
    	}}</h4
    <p>{{ $post->body }}</p>
    {{ Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) }}
        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
    {{ Form::close() }}
@stop