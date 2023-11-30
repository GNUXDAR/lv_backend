@extends('layouts.app')
@section('content')
    <form action="{{ route('note.update', ['note' => $note->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Title</label>
        <input type="text" name="title" value="{{ $note->title }}">

        <label for="">Content</label>
        <input type="text" name="content" value="{{ $note->content }}">

        <label for="">Author</label>
        <input type="text" name="author" value="{{ $note->author }}">

        <input type="submit" value="Save">
    </form>
@endsection