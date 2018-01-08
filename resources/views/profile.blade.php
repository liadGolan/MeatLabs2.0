@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$user->name}}'s Profile</div>
                    <div class="panel-body">
                        {{$user->bio}}
                    </div>
                    <div class="panel-body">
                        <a href="edit/{{Auth::user()->id}}">Edit Bio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection