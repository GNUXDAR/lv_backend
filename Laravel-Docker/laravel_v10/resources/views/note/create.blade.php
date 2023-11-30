@extends('layouts.app')
@section('content')

<a href="{{ route('note.index')}}">Back</a>
<form action="{{ route('note.store')}}" method="POST">
    @csrf
    <label for="">Title</label>
    <input type="text" name="title"> <br>
    @error('title')
        <code>{{ $message }}</code>
    @enderror

    <label for="">Content</label>
    <input type="text" name="content"> <br>
    @error('content')
        <code>{{ $message }}</code>
    @enderror

    <label for="">Author</label>
    <input type="text" name="author"> <br>
    @error('content')
        <code>{{ $message }}</code>
    @enderror

    <input type="submit" value="Save">
</form>

{{-- mostrar todos los errores --}}
@if($errors->any())
<ul>
    @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
</ul>
@endif
@endsection