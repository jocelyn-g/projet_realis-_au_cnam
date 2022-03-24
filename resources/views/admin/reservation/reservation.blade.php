@extends('admin.app_admin')

@section('title', 'Admin - Liste des Réservations')

@section('content')

<div class="container-fluid">
    <div class="row">
        <a href="/admin/reservation/create" class="text-white bg-danger text-center p-4 mt-5 w-25 mx-auto text-decoration-none">Créer une réservation</a>
    </div>

    <div class="row mt-5">
        @if ($reservations)
                    <table class="w-75 mx-auto text-center">
                        <tr class="border border-dark border-4 bg-dark">
                            <th class="p-3 text-white">Id</th>
                            <th class="p-3 text-white">Nom</th>
                            <th class="p-3 text-white">Tel</th>
                            <th class="p-3 text-white">Date</th>
                            <th class="p-3 text-white">Heure</th>
                            <th class="p-3 text-white">Nb personnes</th>
                            <th class="p-3 text-white">Commentaires</th>
                            <th class="p-3 text-white">Confirmation ?</th>
                            <th class="p-3 text-white">Action</th>
                        </tr>
                        @foreach ($reservations as $reservation)
                            <tr class="border border-dark border-4">
                                <td class="p-3">{{ $reservation->id }}</td>
                                <td class="p-3">{{ $reservation->nom }}</td>
                                <td class="p-3">{{ $reservation->tel }}</td>
                                <td class="p-3">{{ $reservation->date }}</td>
                                <td class="p-3">{{ $reservation->heure }}</td>
                                <td class="p-3">{{ $reservation->personnes }}</td>
                                <td class="p-3">{{ $reservation->commentaires }}</td>
                                <td>
                                    @if ($reservation->confirmation === 0)
                                        Annulé
                                    @elseif ($reservation->confirmation === 1)
                                        Confirmé
                                    @else
                                        En attente
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.reservation.edit', ['id' => $reservation->id]) }}" class="bg-warning text-dark text-decoration-none w-100">Modifier</a>
                                    <form action="{{ route('admin.reservation.destroy', ['id' => $reservation->id]) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                            <button type="submit" class="bg-danger text-white">Supprimer</button>
                                    </form>
                                </td>
                            </tr>
                        
                        @endforeach
                    </table>
                @endif
    </div>
</div>

    

@endsection