@extends('layout')

@section('content')
	<p># of posts: {{ count($posts) }}</p>
	{{ link_to_action('PostsController@create', 'Create new post') }}
    @foreach($posts as $post)
        <h4>{{ $post->title, " (", link_to('/posts/'.$post->id, $post->id), ")" }}</h4> 
        <p>{{ $post->body }}</p>
    @endforeach
@stop