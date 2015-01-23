@extends('layouts.default')

@section('content')
	<h1 class="page-header">All Posts</h1>

	<div class="row">
		<div class="col-md-4">
			<p>
				{{ link_to_route('posts.create', 'Create a new post', null, array('class' => 'btn btn-primary')) }}
			</p>
			<br>
		</div>
	</div>

	@foreach($posts as $post)
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-success">
					<div class="panel-heading"><b>{{ link_to_route('posts.show', $post->title, ['id' => $post->id]) }}</b></div>
					<div class="panel-body">
					{{ $post->body }}
					</div>
				</div>
			</div>
		</div>
	@endforeach
	
@stop