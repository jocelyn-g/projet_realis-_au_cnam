@extends('admin.app_admin')

@section('title', 'Admin - Liste des Réservations')

@section('content')


<div class="container-fluid">
    <div class="row">
        <a href="/admin/reservation" class="text-white bg-danger text-center p-4 mt-5 w-25 mx-auto text-decoration-none">voir les réservation</a>
    </div>

    <div class="row">
        <a href="/admin/menu" class="text-white bg-danger text-center p-4 mt-5 w-25 mx-auto text-decoration-none">voir les menu</a>
    </div>
</div>


@endsection
