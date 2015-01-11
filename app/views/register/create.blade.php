@extends('layouts.master')
@section('title')
Login In | Sign Up
@stop
@section('content')

    <div class="container">
        <div class="col-md-6 col-md-offset-3">
            <h4>Register!</h4>
            {{ Form::open(['method' => 'POST', 'route' => 'register.store']) }}
            <div class="form-group">
                {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Email Address']) }}
                {{ $errors->first('email', '<span class="error">:message</span>') }}
            </div>
            <div class="form-group">
                {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password']) }}
                {{ $errors->first('password', '<span class="error">:message</span>') }}
            </div>
            <div class="form-group">
                {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password Confirmation']) }}
            </div>
            <div class="form-group">
                {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}
            </div>
            {{ Form::close() }}
        </div>
    </div>

@stop