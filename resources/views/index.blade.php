@extends('app')


@section('title', 'Accueil')

@section('content')
    <div class="slider">

        <div class="imgslide">
            <img src="{{ asset('img/images.jpg')}}" alt="">
        </div>

        <div class="inforestaurant">
            <h1>Spécialité<br>camerounaise</h1>
            <p>{{ $message_slider }}</p>
            
                <div class="btn">
                    <h2><a href="/reservation">Réserver</a></h2>
                </div>
        </div>

    </div>
@endsection