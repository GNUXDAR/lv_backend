@extends('layouts.app')

@section('content')
    <a href="{{ route('note.create')}}">Create New Note</a>
    <ul>
        @forelse($notes as $note)
            <li>
                <a href="{{ route('note.show', $note->id)}}">{{ $note->title }}</a> | 
                <a href="{{ route('note.edit', ['note' => $note->id]) }}">Edit</a> | 
                <form method="POST" action="{{ route('note.destroy', $note->id) }}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete">
                </form>
            </li>
        @empty
            <h3>No hay data.</h3>
        @endforelse
    </ul>
@endsection