@extends('layouts.master')

@section('content')

<div class="col-md-4">
    <p>Up Coming Events: </p>
    <p>Event One happening in Dallas DFW right now</p>
    <p>Event One happening in Dallas DFW right now</p>
    <p>Event One happening in Dallas DFW right now</p>
    <p>Event One happening in Dallas DFW right now</p>
</div>
<div class="col-md-4 find_book">
    {{ Form::open() }}
    <p class="text-center panel">Search for Events/Room share/ Ride Share / Lawyer: </p>
    <div class="form-group">
        <select class="form-control" name="specialist">
            <optgroup label="Specialist">

                <option>
                    Hello 1
                </option>

            </optgroup>
        </select>
    </div>
    In:
    <div class="form-group">
        <select class="form-control" name="location">
            <optgroup label="Location">

                <option>
                    Hello 2
                </option>

            </optgroup>
        </select>
    </div>
    Postcode:
    <div class="form-group">
        <select class="form-control" name="postcode">
            <optgroup label="Postcode">

                <option>
                    Hello 3
                </option>

            </optgroup>
        </select>
    </div>
    <div class="form-group">
        {{ Form::submit('Submit', ['class' => 'form-control btn btn-primary']) }}
    </div>
    {{ Form::close() }}
</div>
<div class="col-md-4">
    <div class="col-md-12">
        <p>Room Share: </p>
        <p>Room available for girl in irving</p>
        <p>Room available for girl in irving</p>
        <p>Room available for girl in irving</p>
        <p>Room available for girl in irving</p>
    </div>
    <div class="col-md-12">
        <p>Ride Share: </p>
        <p>Room available for girl in irving</p>
        <p>Room available for girl in irving</p>
        <p>Room available for girl in irving</p>
        <p>Room available for girl in irving</p>
    </div>
</div>
@stop