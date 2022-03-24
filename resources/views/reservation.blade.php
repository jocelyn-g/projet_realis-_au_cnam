@extends('app')


@section('title', 'Reservation')

@section('content')
    <section>

    <h1>Souhaitez-vous <br> Réserver ?</h1>

    <div class="flex">
        @include('include_php.formulaire')
        @include('include_php.horaire')
    </div>

    </section>
@endsection