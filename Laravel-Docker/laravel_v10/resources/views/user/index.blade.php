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
            <li>{{ $user->name }}  {{ $user->age }}</li>
        @empty
            <p>No hay Data!.</p>
        @endforelse
    </ul>
@endsection