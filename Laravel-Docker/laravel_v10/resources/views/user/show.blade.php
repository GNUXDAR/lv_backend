@extends('layouts.app')
@section('content')

    <a href="{{ route('user.index')}}"> Back</a>
    <h1>Nombre:{{ $user->name }}</h1>

    <p>Estos datos de numero es una relacion de modelos</p>
    {{-- <h3>Prefijo: {{ $user->phone->prefix }}</h3> --}}
    <h3>Numero: 
        <ul>
            {{-- un usuario puede tener varios numero hasMany --}}
            @foreach ($user->phones as $phone)
            <li>{{ $phone->prefix }} {{ $phone->phone_number }}</li>
                
            @endforeach
        </ul>
        {{-- {{ $user->phone->phone_number }}</h3> --}}
@endsection