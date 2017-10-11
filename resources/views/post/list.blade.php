@extends('master.scaffolding-2')

@section('content')
<div class="container">
    <a class="btn btn-primary btn-lg pull-right" href="{{ url('/blog/create') }}" role="button">Add Post</a>
    <h1>Blog</h1>
    @foreach ($posts as $post)
        <h2><a href="{{ url('/blog', $post->slug) }}">{{ $post->title }}</a></h2>
        <small>{{ $post->published_at }}</small>
        <br /><br />
        <p>{{ $post->content }}</p>
    @endforeach
</div>
@endsection