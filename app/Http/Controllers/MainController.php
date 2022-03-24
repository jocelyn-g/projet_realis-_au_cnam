<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Etiquette;
use App\Models\Plat;
use App\Models\Reservation;
use Illuminate\Http\Request;

class MainController extends Controller
{

    
    private $donnée = [
        "adresse" => "Cité Universitaire",
        "ville" => "Yaounde",
        "tel" => "03.00.00.00",
        "message_slider" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus non nihil sequi dicta unde eligendi aut minima sed, aperiam iure saepe 
                            fugiat aliquid repudiandae inventore reprehenderit quam ullam atque quasi.",
    ];

    public function index()
    {
        return view("index", array_merge($this->donnée));
    }

    public function menu()
    {
    
        $categories = Categorie::all();
        $plats = $categories[0]->plats()->get();
        
        /*$etiquettes = Etiquette::get();*/

        /*$categories = Categorie::all();

        foreach ($categories as $categorie){
            // enregistre les données dans le fichier logs
            // Log::debug($categorie);
            dump($categorie->nom);
            
            $plats = $categorie->plats()->get();

            foreach($plats as $plat){
                dump($plat->id);

                $etiquettes = $plat->etiquette()->orderBy('nom')->get();

                foreach($etiquettes as $etiquette){
                    dump($etiquette->nom);
                }
            }
        }*/

        return view("menu", array_merge($this->donnée),[

        "categories" => $categories,
        "plats" => $plats,
        /*"etiquettes" => $etiquettes,*/
        ]
    );

        


    }

    public function reservation()
    {
        return view("reservation", array_merge($this->donnée));
    }

    public function contact()
    {
        return view("contact", array_merge($this->donnée));
    }


    public function index_admin()
    {
        return view("admin.index_admin");
    }
}