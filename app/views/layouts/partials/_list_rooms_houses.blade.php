<style>
    .post_add{color:#fff;}
</style>
<div class="container" style="margin: 2%;">
    <div class="col-md-8">
        {{ Form::open() }}
        <div class="form-group">
            {{ Form::text('query', null, ['class' => 'form-control', 'placeholder' => 'Search ! Eg. city']) }}
        </div>
        {{ Form::close() }}
    </div>
    <div class="col-md-2">
        <a href="{{ URL::route('room_share') }}" class="post_add">
            <button class="btn btn-warning pull-right post_add_link" type="submit">Post Add</button>
        </a>
    </div>
</div>
<div class="container">
    <hr/>
</div>
<div class="container">
    <div class="col-md-10">
        @foreach($rooms as $room)
        <div class="col-md-3">
            {{HTML::image('/img/'.$room->urls , $alt=$room->title, array('width' => 200, 'height' => 100)) }}
        </div>
        <div class="col-md-7">
            <p class="room_share room_title">
                <a href="
                            {{ URL::to('room_share_available/'.$room->id.'/'.preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),array('', '-', '') ,$room->title)) }}">
                    {{Str::limit ($room->title, 20)}}
                    ....
                </a>
            </p>
            <p>{{Str::limit ($room->description, 120)}}
                <a href="
                            {{ URL::to('room_share_available/'.$room->id.'/'.preg_replace(array('/[^a-zA-Z0-9 -]/', '/[ -]+/', '/^-|-$/'),array('', '-', '') ,$room->title)) }}">
                    Read More[+]
                </a>
            </p>
            <p>{{ $room->bedroom}} Apartment </p>
        </div>
        <div class="col-md-1">
            <p class="room_share ">${{ $room->price}} </p>
        </div>
        <div class="col-md-1">
            <p class="room_share_address">{{ $room->address}} </p>
            <p>
                <?php $create_date = $room->created_at;
                $display_date =  date("d-m-Y", strtotime($create_date)); echo $display_date; ?>
            </p>
        </div>
        @endforeach

        <hr style="line-height: 2px; border;: 2px solid black;"/>

    </div>
    <div class="col-md-1"></div>
</div>
