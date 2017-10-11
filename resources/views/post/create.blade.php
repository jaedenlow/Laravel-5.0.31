@extends('master.scaffolding-2')

@section('content')
<div class="container">
    <h1>New Blog Post</h1>
    
    <hr>
    
    {!! Form::open(['url' => 'blog']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('content', 'Content:') !!}
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::label('slug', 'Slug:') !!}
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
    </div>
    
    <div class="form-group">
        {!! Form::submit('Add Post', ['class' => 'btn btn-primary form-control']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection