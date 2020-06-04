@extends('main')

@section('title', 'Create new content')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create new content</h1>
            {!! Form::open(array('route'=>'pages.store')) !!}
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class'=>'form-control')) }}
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content', null, array('class'=>'form-control')) }}
            {!! Form::submit('Create Page', array('class'=> 'btn btn-success btn-lg btn-block')) !!}
            {!! Form::close() !!}
        </div>
    </div>

@endsection
