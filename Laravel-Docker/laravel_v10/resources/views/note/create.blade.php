@extends('layouts.app')
@section('content')
<a href="{{ route('note.index')}}">Back</a>
<form action="{{ route('note.store')}}" method="POST">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title">

    <label for="">Content</label>
    <input type="text" name="content">

    <label for="">Author</label>
    <input type="text" name="author">

    <input type="submit" value="Save">
</form>
@endsection