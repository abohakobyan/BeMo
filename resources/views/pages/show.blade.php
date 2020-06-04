@extends('main')

@section('title', $page->title)

@section('content')


<p class = "cont">
    {!!$page->content!!}
</p>
@endsection
