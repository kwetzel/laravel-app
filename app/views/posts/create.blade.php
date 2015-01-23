@extends('layouts.default')

@section('content')
    <h1 class="page-header">Create new post</h1>

    @include('layouts.partials.error')

	{{ Form::open(array('route' => 'posts.store')) }}
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
        		{{ Form::submit('Create', array('class' => 'btn btn-primary')) }}
                </p>
            </div>
        </div>
	{{ Form::close() }}

@stop