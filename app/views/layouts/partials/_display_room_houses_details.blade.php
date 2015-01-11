
<div class="container">
    <div class="col-md-10" style="background: #E9EAD0;">
        <h2>{{ $room_id->title}}</h2>
        <div class="col-md-10">
            <p>$&nbsp;{{ $room_id->price}}</p>
            <p><i class="fa fa-map-marker fa-2x" style="color: #1A8EDE"></i>&nbsp;&nbsp;&nbsp;{{ $room_id->address}}</p>
        </div>
        <div class="col-md-2">
            <p><a href=""><i class="fa fa-star-o fa-2x" style="color: #1A8EDE"></i></a>&nbsp;&nbsp;&nbsp;Watch</p>
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-8 room_details_listing">
        <div class="col-md-6">
            <p>Date Listed: <?php
                $room_posted_date = $room_id->created_at;
                $room_posted_date = date('m-d-Y', strtotime($room_posted_date));
                ?><b><?php echo $room_posted_date; ?> </b>
            </p>
            <p>Share Basis: <b>{{ $room_id->share_basis}}</b></p>
            <p>Bedrooms: <b>{{ $room_id->bedroom}}</b></p>
            <p>Smooking: <b>{{ $room_id->smoking}}</b></p>
            <p>Parking: <b>{{ $room_id->parking}}</b></p>
        </div>
        <div class="col-md-6">
            <p>Available:<?php
                $room_available = $room_id->available;
                $room_available = date('m-d-Y', strtotime($room_available));
                ?> <b><?php echo $room_available; ?></b>
            </p>
            <p>Bathroom: <b>{{ $room_id->bathrooms}}</b></p>
            <p>Furnished: <b>{{ $room_id->furnished}}</b></p>
            <p>Pet Friendly:<b>{{ $room_id->pet_friendly}}</b> </p>
            <p>Gender Preferences: <b>{{ $room_id->gender_friendly}}</b></p>
        </div>
        <div class="col-md-12 room_details_description">
            <p>{{ $room_id->description }}</p>
        </div>
    </div>
    <div class="col-md-4 social_authoer_name_section">
        <a target="_blank" href={{$room_id->url }}>{{$room_id->url}}</a>
        <div class="fb-like" data-href={{Request::url()}} data-layout="standard" data-action="like" data-show-faces="true" ></div>
        <br><br>
        <a target="_blank" href="{{ Share::load(Request::url(), 'check this'.$room_id->title)->facebook() }}" >
            <i class="fa fa-lg fa-facebook btn btn-sm btn-primary social_logo"></i>
        </a>
        <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->twitter() }}" >
            <i class="fa fa-lg fa-twitter btn btn-sm btn-primary social_logo"></i>
        </a>
        <a target="_blank" href="{{ Share::load(Request::url(), 'check this')->gplus() }}" >
            <i class="fa fa-lg fa-google-plus btn btn-sm btn-primary social_logo"></i>
        </a>
        <a target="_blank" href="{{ Share::load(Request::url(), 'check this ')->linkedin() }}" >
            <i class="fa fa-lg fa-linkedin btn btn-sm btn-primary social_logo"></i>
        </a>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#reportModel"><i class="fa fa-flag fa-2x"></i>&nbsp;&nbsp;Report</button>
        <!-- Button to trigger abuse/report Modal -->
        <p><i class="fa fa-user fa-2x"></i>&nbsp;&nbsp;{{ $room_id->name }}</p>
        <p><a href="tel:{{ $room_id->phone }}"><i class="fa fa-phone fa-2x"></i>&nbsp;&nbsp;{{ $room_id->phone }}</a></p>
        <p><button class="btn btn-success" type="button" data-toggle="modal" data-target="#msgModel"><i class="fa fa-envelope-o fa-1x"></i>&nbsp; SEND MESSAGE</button></p>
        <!-- Button to trigger msg sending modal -->

        <!--Model for Reporting Abuse/Spam/Fake -->
        <div class="modal fade" id="reportModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">You are about to report  a post from {{$room_id->name}} </h4>
                    </div>
                    <div class="modal-body">
                        {{ Form::open() }}
                        <h4>Check What Applies: </h4>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Spam
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Abusive
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" value="">
                                Other/Unknown
                            </label>
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal For Sending Message-->
        <div class="modal fade" id="msgModel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">You are about to contact {{$room_id->name}} </h4>
                    </div>
                    <div class="modal-body">
                        {{ Form::open() }}
                        <div class="form-group">
                            {{ Form::text('name',null,  ['class' => 'form-control', 'placeholder' => 'Write Your Name' ]) }}
                        </div>
                        <div class="form-group">
                            {{ Form::text('name',null,  ['class' => 'form-control', 'placeholder' => 'Write Your Email' ]) }}
                        </div>
                        <div class="form-group">
                            {{ Form::textarea('name',null,  ['class' => 'form-control', 'placeholder' => 'Write a short description' ]) }}
                        </div>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>