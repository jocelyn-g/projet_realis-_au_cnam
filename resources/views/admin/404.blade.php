@extends('layouts.app')


@section('title', 'Admin - 404 Non trouvé')


@section('content')
    <h1>Admin - 404 Non trouvé</h1>

    @if ($message)
        <p>{{$message}}</p>
    @endif
    
@endsection