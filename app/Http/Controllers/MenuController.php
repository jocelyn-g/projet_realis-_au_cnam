<?php

namespace App\Http\Controllers;

use App\Models\Plat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;

class MenuController extends Controller
{
    public function menu()
    {
        // récupère les réservations à partir d'aujourd'hui et plus tard, en les triant par jour puis par heure
        $plats = Plat::select()
            ->orderBy('categorie_id')
            ->get();

            return view('admin.menu.menu', [
                'plats' => $plats,
            ]);
    }


}