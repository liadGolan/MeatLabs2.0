@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$user->name}}'s Profile</div>
                    <div class="panel-body">
                        {{Form::open(['url' => url('/profile/$id')])}}
                        Enter Bio
                        <br>
                        {{Form::textarea('bio')}}
                        <br>
                        {{Form::submit('Submit Bio')}}
                        {{Form::close()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection