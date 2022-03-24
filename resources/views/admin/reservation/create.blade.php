@extends('admin.app_admin')


@section('title', 'Admin - création réservation')


@section('content')
    

<div class="container">
    <div class="row text-align mx-auto w-50">
      <h1>Admin - Création réservation</h1>
    </div>

    <div class="row">
      <form action="{{ route('admin.reservation.store') }}" method="post" class="form">
      
          @include("admin.reservation._form")

      </form>
    </div>
</div>
@endsection
    
