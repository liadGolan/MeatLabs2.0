@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Hello </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Make A Post</div>
                <div class="panel-body">
                    {!!  Form::open() !!}
                    TITLE
                    <br>
                    {!!  Form::text('title') !!}
                    <br><br>
                    CONTENT
                    <br>
                    {!! Form::textarea('content') !!}
                    <br><br>
                    {!! Form::submit('Submit Post') !!}
                    {!! Form::close() !!}
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Posts</div>
                <div class="panel-body">
                    @if(!empty($posts))
                        @foreach($posts as $post)
                            -------------------------------
                            <br>
                            TITLE
                            <br>
                            {{$post->title}}
                            <br><br>
                            AUTHOR
                            <br>
                            {{$post->author}}
                            <br><br>
                            CONTENT
                            <br>
                            {{$post->content}}
                            <br>
                            -------------------------------
                            <br><br>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
