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

    {{-- prueba de relacion muchos a muchos --}}
    <h3>Roles: 
        <ul>
            {{-- un usuario puede tener muchos roles y un rol puede tener muchos usuarios belongsToMany --}}
            @foreach ($user->roles as $role)
            <li>{{ $role->name }} Added by: {{ $role->pivot->added_by }}</li>
                
            @endforeach
        </ul>
@endsection