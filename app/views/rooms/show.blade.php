@extends('layouts.master')

@section('title')
    {{ $room_id->title }}
@stop
@section('content')

    @include('layouts.partials._display_room_houses_details')

@stop