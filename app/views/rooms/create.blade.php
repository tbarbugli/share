@extends('layouts.master')

@section('content')

   <div class="container">
       <div class="col-md-6">
           <h4>Provide the details of your room and your requirements: </h4>
           {{ Form::open(['route' => 'room_save', 'files' => true]) }}
           <div class="form-group">
               {{ Form::label('price', 'Price:') }}
               {{ Form::text('price',null,  ['class' => 'form-control', 'placeholder' => 'Enter price per month' ]) }}
           </div>
           <div class="form-group">
               {{ Form::label('price', 'Share Basis:') }}
               <select class="form-control" name="share_basis">
                   <optgroup label="Share Basis: ">
                       <option>Please Choose</option>
                       <option>Room Share</option>
                       <option>House Share</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('available', 'Available:') }}
               {{ Form::text('available',null,  ['class' => 'form-control', 'id' => 'datepicker' ]) }}
           </div>
           <div class="form-group">
               {{ Form::label('bedrooms', 'Bedrooms:') }}
               <select class="form-control" name="bedrooms">
                   <optgroup label="Bedrooms: ">
                       <option>Please Choose</option>
                       <option>Studio Room</option>
                       <option>1 Bedrooms</option>
                       <option>2 Bedrooms</option>
                       <option>3 Bedrooms</option>
                       <option>4 Bedrooms or More</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('bathrooms', 'Bathrooms:') }}
               <select class="form-control" name="bathrooms">
                   <optgroup label="Bathrooms: ">
                       <option>Please Choose</option>
                       <option>Studio Room</option>
                       <option>1 Bathroom</option>
                       <option>2 Bathrooms</option>
                       <option>3 Bathrooms</option>
                       <option>4 Bathrooms or More</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('smoking', 'Smoking:') }}
               <select class="form-control" name="smoking">
                   <optgroup label="Smoking: ">
                       <option>Please Choose</option>
                       <option>Yes</option>
                       <option>NO</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('furnished', 'Furnished:') }}
               <select class="form-control" name="furnished">
                   <optgroup label="Smoking: ">
                       <option>Please Choose</option>
                       <option>Yes</option>
                       <option>NO</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('parking', 'Parking:') }}
               <select class="form-control" name="parking">
                   <optgroup label="Smoking: ">
                       <option>Please Choose</option>
                       <option>Yes</option>
                       <option>NO</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('pet_friendly', 'Pet Friendly:') }}
               <select class="form-control" name="pet_friendly">
                   <optgroup label="Smoking: ">
                       <option>Please Choose</option>
                       <option>Yes</option>
                       <option>NO</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('gender_friendly', 'Gender Friendly:') }}
               <select class="form-control" name="gender_friendly">
                   <optgroup label="Smoking: ">
                       <option>Please Choose</option>
                       <option>Male</option>
                       <option>Female</option>
                       <option>No Preference</option>
                   </optgroup>
               </select>
           </div>
           <div class="form-group">
               {{ Form::label('title', 'Title:') }}
               {{ Form::text('title',null,  ['class' => 'form-control', 'placeholder' => 'Title for the Post']) }}
           </div>
           <div class="form-group">
               {{ Form::label('description', 'Description:') }}
               {{ Form::textarea('description',null,  ['class' => 'form-control', 'placeholder' => 'Give brief description of your room' ]) }}
           </div>
           <div class="form-group">
               {{ Form::label('pictures', 'Pictures:') }}
               {{ Form::file('photo') }}
           </div>
            <h4>Contact Details</h4>
           <div class="form-group">
               {{ Form::label('name', 'Contact Name:') }}
               {{ Form::text('name',null,  ['class' => 'form-control', 'placeholder' => 'Your Name' ]) }}
           </div>
           <div class="form-group">
               {{ Form::label('email', 'Email:') }}
               {{ Form::text('email',null,  ['class' => 'form-control', 'placeholder' => 'Email' ]) }}
           </div>
           <div class="form-group">
               {{ Form::label('phone', 'Phone:') }}
               {{ Form::text('phone',null,  ['class' => 'form-control', 'placeholder' => 'Phone']) }}
           </div>
           <div class="form-group">
               {{ Form::label('address', 'City:') }}
               {{ Form::text('address',null,  ['class' => 'form-control', 'placeholder' => 'Only City Name']) }}
           </div>
           <p>By posting your ad, you are agreeing to our <a href=""> terms of use</a> and <a href="">privacy policy </a>. </p>
           <div class="form-group">
               {{ Form::submit('Post Ad',  ['class' => 'btn btn-danger']) }}
           </div>
           {{ Form::close() }}
       </div>
   </div>

@stop