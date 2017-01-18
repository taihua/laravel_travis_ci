@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

<div>comment</div>
<div>留言板</div>

@foreach ($posts as $post)
    <p>title {{ $post->title }} &nbsp; content {{ $post->content}}</p>
@endforeach

@endsection
