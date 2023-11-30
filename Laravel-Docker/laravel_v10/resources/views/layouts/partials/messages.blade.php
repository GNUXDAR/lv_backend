@if($message = Session::get('success'))
    <div style="padding:15px; background-color: blue; color:#fff;">
        <p>{{ $message }}</p>
    </div>
@endif

@if(Session::has('success'))
    <div class="alert alert-success" role="alert" style="padding:15px; background-color: orange; color:#fff;">
        {{ Session::get('success') }}
    </div>
@endif


@if($message = Session::get('danger'))
    <div style="padding:15px; background-color: red; color:#fff;">
        <p>{{ $message }}</p>
    </div>
@endif