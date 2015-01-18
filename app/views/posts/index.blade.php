@extends('layouts.default')

@section('content')
	<h2>Show posts</h2>
	# of posts: {{ $posts->count() }}<br>
	{{ link_to_route('posts.create', 'Create new post') }}<br>
    @foreach($posts as $post)
        <p><b>{{ link_to_route('posts.show', $post->title, ['id' => $post->id]) }}</b> 
        {{ $post->body }}<p>
    @endforeach
@stop