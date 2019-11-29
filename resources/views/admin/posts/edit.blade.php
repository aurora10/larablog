@extends('layouts.admin')
@section('content')
    <h1>Edit Post</h1>

    <div class="row">
        <div class="col-md-4">

            <img height="50" src="{{$post->photo ? asset($post->photo->file) : 'http://placehold.it/400x400'}}" alt="" class="img-responsive">
        </div>
        <div class="col-md-8">


            {!! Form::model($post, ['method' => 'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files' => true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', ['' => 'Choose Category'] + $categories , null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id',  null, ['class' => 'form-control'] ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control'] ) !!}
            </div>


            <div class="form-group">
                {!! Form::submit('Update Post', ['class' => 'btn btn-primary']) !!}
            </div>


            {!! Form::close() !!}

            {!! Form::open(['method' => 'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id ]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete Post', ['class' => 'btn btn-danger']) !!}
            </div>

            {!! Form::close() !!}

            @include('includes.form_error')
        </div>
    </div>
@stop

