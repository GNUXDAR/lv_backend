@extends('layouts.app')
@section('content')
    <h1>Users</h1>

    {{-- @if($users->isEmpty())
        <p>No hay Data!.</p>
    @else
        <ul>
            @foreach($users as $user)
                <li>{{ $user->name }}</li>
            @endforeach
        </ul>
    @endif --}}

    {{-- mejor manera --}}
    <ul>
        @forelse($users as $user)
            <li><a href="/user/show/{{ $user->id}}">{{ $user->name }}  {{ $user->age }} {{-- $user->phone --}}</a></li>
            
        @empty
            <p>No hay Data!.</p>
        @endforelse
        {{-- {{ $users->phone->prefix }} - {{ $users->phone->phone_number }} --}}
    </ul>
@endsection