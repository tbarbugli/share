@extends('layouts.master')
@section('title')
    Login In | Sign Up
@stop
@section('content')
    <div class="container">
        <div class="col-md-8">
            {{ Form::open(['route' => 'user.store']) }}
                <div class="form-group">
                    {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password']) }}
                </div>
                <div class="form-group">
                    {{ Form::submit('Log In', ['class' => 'btn btn-warning']) }}
                </div>
                @if(Session::has('flash_message'))
                <div class="form-group">
                    <p>{{ Session::get('flash_message') }}</p>
                </div>
                @endif
            {{ Form::close() }}
        </div>
        <div class="col-md-2">
            <h2><a href="{{ URL::route('register') }}">Sign Up</a></h2>
        </div>
    </div>
@stop