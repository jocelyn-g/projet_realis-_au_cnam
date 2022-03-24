<!DOCTYPE html>
<html lang="{{ config('app.locale')}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'buro | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
</head>
<body>

<header>

    <div class="logo">
        <a href="/"><img src="{{ asset('img/logo.png')}}" alt=""></a>
    </div>

    <div class="navigation">
        <nav>

            <div class="menuburger">
            <button class="burger"><i class="fas fa-bars"></i></button>
            <ul class="sous_menu">
                <li><a href="/menu">Menu <i class="fas fa-utensils"></i></a></li>
                <li><a href="/reservation">Réservation <i class="far fa-calendar-alt"></i></a></li>
                <li><a href="/contact">Contact <i class="far fa-address-card"></i></a></li>
            </ul>
            
            </div>

            <div class="menudesk">
            <a href="/menu">Menu</a>
            <a href="/reservation">Réservation</a>
            <a href="/contact">Contact</a>
            </div>
        </nav>
    </div>

</header>

    @section('content')
    @show

    <footer>

<div class="adresse">
    <h2>
        {{ $adresse }} <br>
        {{ $ville }} <br>
        {{ $tel }}
    </h2>
</div>

<div class="reseauxsociaux">
    <a href="https://fr-fr.facebook.com/"><i class="fab fa-facebook-f"></i></a>
    <a href="https://www.instagram.com/?hl=fr"><i class="fab fa-instagram"></i></a>
</div>

<div class="btn">
    <h2><a href="/contact">Contactez-nous</a></h2>
</div>

</footer>
    
</body>
</html>