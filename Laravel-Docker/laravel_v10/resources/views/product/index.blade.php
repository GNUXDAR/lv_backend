@extends('layouts.app')
@section('content')

    <div class="container">
        @forelse($products as $product)
            <div class="card">
                <h3>{{ $product->id }}</h3>
                <h3>{{ $product->name }}</h3>
                <h3>{{ $product->short_description }}</h3>
                <p>{{ $product->price }} USD</p>
            </div>
        @empty
            <h5>No Data.</h5>
        @endforelse
    </div>
@endsection