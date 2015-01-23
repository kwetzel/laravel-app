@extends('layouts.default')

@section('content')
    <h1 class="page-header">Show post</h1>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-success">
                <div class="panel-heading"><b>{{ $post->title }}</b></div>
                <div class="panel-body">
                {{ $post->body }}
                </div>
            </div>
        </div>
    </div>
    
    <p>
    {{ link_to_route('posts.edit', 'Edit', array('id' => $post->id), array('class' => 'btn btn-primary')) }}
    </p>
    {{ Form::open(array('route' => array('posts.destroy', $post->id), 'method' => 'delete')) }}
        <p>
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        </p>
    {{ Form::close() }}
@stop