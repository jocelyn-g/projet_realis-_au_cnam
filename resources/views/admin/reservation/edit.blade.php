@extends('admin.app_admin')


@section('title', 'Admin - édition réservation')


@section('content')





    <div class="container">
    <div class="row text-align mx-auto w-50">
        <h1>Admin - édition réservation</h1>
    </div>

    <div class="row">
        <form action="{{ route('admin.reservation.update', ['id' => $reservation->id]) }}" method="post" class="form">
            @method ('put')
            <div class="mx-auto">
                <input type="text" class="w-100" value="vous êtes sur l'id {{ $reservation->id }} de réservation" disabled="disabled" readonely>
            </div>

            @include("admin.reservation._form")
            
        </form>
    </div>
</div>
@endsection
    
