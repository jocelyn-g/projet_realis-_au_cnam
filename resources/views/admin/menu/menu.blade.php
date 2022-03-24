@extends('admin.app_admin')

@section('title', 'Admin - Liste des Plats')

@section('content')




<div class="container-fluid">
    <div class="row">
        <a href="/admin" class="text-white bg-danger text-center p-4 mt-5 w-25 mx-auto text-decoration-none">Créer un menu</a>
    </div>

    <div class="row mt-5">
        @if ($plats)
                    <table class="w-75 mx-auto text-center">
                        <tr class="border border-dark border-4 bg-dark">
                            <th class="p-3 text-white">Id</th>
                            <th class="p-3 text-white">Nom</th>
                            <th class="p-3 text-white">Description</th>
                            <th class="p-3 text-white">prix</th>
                            <th class="p-3 text-white">categorie_id</th>
                        </tr>
                        @foreach ($plats as $plat)
                            <tr class="border border-dark border-4">
                                <td class="p-3">{{ $plat->id }}</td>
                                <td class="p-3">{{ $plat->nom }}</td>
                                <td class="p-3">{{ $plat->description }}</td>
                                <td class="p-3">{{ $plat->prix }}</td>
                                <td class="p-3">{{ $plat->categorie_id }}</td>
                            </tr>

                        
                        @endforeach
                    </table>
                @endif
    </div>
</div>

@endsection
