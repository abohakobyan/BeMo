@extends('main')

@section('title', 'All posts')

@section('content')
@foreach ($pages as $page)
    {!!$page->title!!}
@endforeach


@endsection
