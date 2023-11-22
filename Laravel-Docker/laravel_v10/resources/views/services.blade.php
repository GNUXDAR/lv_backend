@extends('layouts.landing')
@section('title', 'Service')
@section('content')
    <h1>Service</h1>
    <div class="cards">
        @component('components.card')
            @slot('title', 'service 1') 
            @slot('content', 'Lorem ipsum dolor set aimet.Lorem ipsum dolor set aimet.Lorem ipsum dolor set aimet.Lorem ipsum dolor set aimet.Lorem ipsum dolor set aimet.')       
        @endcomponent
        @component('components.card')
            @slot('title', 'service 2') 
            @slot('content', 'Lorem ipsum dolor set aimet.')       
        @endcomponent
            @component('components.card')
            @slot('title', 'service 3') 
            @slot('content', 'Lorem ipsum dolor set aimet.')       
        @endcomponent
    </div>
@endsection