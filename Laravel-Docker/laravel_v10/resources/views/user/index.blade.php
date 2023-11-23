<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>USers</title>
</head>
<body>
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

</body>
</html>