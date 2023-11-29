@extends('layouts.app')

@section('content')
    <ul>
        @forelse($notes as $note)
            <li><a href="#">{{ $note->title }}</a></li>
        @empty
            <h3>No hay data.</h3>
        @endforelse
    </ul>
@endsection