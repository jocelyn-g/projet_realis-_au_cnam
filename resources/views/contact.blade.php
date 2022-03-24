@extends('app')


@section('title', 'Contact')

@section('content')
    <section class="flex">
        @include('include_php.contact')
        @include('include_php.horaire')
    </section>
@endsection