@include('layouts.partials._new_header')

    @if(Session::has('message'))
        <div class="alert alert-danger" style="margin-top: 200px;">{{ Session::get('message') }}</div>
    @endif

    <div class="container">
        @yield('content')
    </div>

@include('layouts.partials._footer')