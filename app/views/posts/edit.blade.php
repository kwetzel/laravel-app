@extends('layouts.default')

@section('content')
    <h1 class="page-header">Edit post</h1>

    @include('layouts.partials.error')

    {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'put')) }}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {{ Form::label('title', 'Title') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    {{ Form::label('body', 'Body') }}
                    {{ Form::textarea('body', null, array('class' => 'form-control', 'rows' => '3')) }}
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <p>
                {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}
                </p>
            </div>
        </div>
    {{ Form::close() }}

@stop