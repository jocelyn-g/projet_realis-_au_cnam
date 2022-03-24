<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DateTime;

class ReservationController extends Controller
{
    public function reservation()
    {
        $today = new DateTime();
        // on fixe l'heure et les minutes à zéro
        $today->setTime(0, 0);
        // récupère les réservations à partir d'aujourd'hui et plus tard, en les triant par jour puis par heure
        $reservations = Reservation::select()
            ->where('date', '>=', $today->format('Y-m-d'))
            ->orderBy('date')
            ->orderBy('heure')
            ->get();

            return view('admin.reservation.reservation', [
                'reservations' => $reservations,
            ]);
    }

    public function create()
    {
        $reservation = new Reservation();
        $now = new \DateTime;
        $reservation->date = $now->format('A-m-j');
        $reservation->heure = $now->format('H:i');
        $reservation->confirmation = 'null';

        return view('admin.reservation.create',[
            'reservation' => $reservation,
        ]);
    }


    public function store(Request $request)
    {


        $rules = $this->getRules();
        $validated = $request->validate($rules);
        
        $reservation = new Reservation();
        $reservation = $this->formToModel($validated, $reservation);
        $reservation->save();

        return redirect()->route('admin.reservation.reservation', [
            'id' => $reservation->id,
        ]);
        
    }


    public function edit(int $id)
    {


        $reservation = Reservation::find($id);

        if (!$reservation){
            $message = "La reservation {$id} n'existe pas";
            return response()->view('admin.404',[
                'message' => $message,
            ], 404);
        }

        $now = new DateTime();

        if ($reservation->confirmation === 0){

            $reservation->confirmation = '0';

        } elseif ($reservation->confirmation === 1){

            $reservation->confirmation = '1';

        } else {

            $reservation->confirmation = 'null';
            
        }

        return view('admin.reservation.edit', [
            'reservation' => $reservation,
            'now' => $now,
        ]);

        echo $reservation->nom;
    }

    public function update(Request $request, int $id)
    {
        $reservation = Reservation::find($id);

        if (!$reservation){
            $message = "La reservation {$id} n'existe pas";
            return response()->view('admin.404',[
                'message' => $message,
            ], 404);
        }

        // validation
        
        $rules = $this->getRules();
        $validated = $request->validate($rules);

        $reservation = $this->formToModel($validated, $reservation);
        $reservation->save();

        return redirect()->route('admin.reservation.reservation');
    }

    public function destroy(int $id)
    {

        $reservation = Reservation::find($id);

        if (!$reservation){
            $message = "La reservation {$id} n'existe pas";
            return response()->view('admin.404',[
                'message' => $message,
            ], 404);
        }

        $reservation->delete();

        return redirect()->route('admin.reservation.reservation');

    }

    public function getRules()
    {
        
        $today = new DateTime();
        $today -> setTime(0, 0);

        return
        [
            'nom'           => ['required', 'min:2', 'max:190', 'not_regex:/[0-9]+/'],
            'tel'           => ['required', 'max:190', 'regex:/^\+?[0-9()]+$/'],
            'date'          => ['required', 'date', 'after_or_equal:'.$today->format('Y-m-d')],
            'heure'         => ['required'],
            'personnes'     => ['required', 'integer', 'between:1,12'],
            'commentaires'  => ['nullable', 'max:500'],
            'confirmation'  => ['required', 'in:null,0,1'],
        ];
    }

    public function formToModel(array $validated, Reservation $reservation): Reservation
    {

        
        $reservation->nom           = $validated['nom'];
        $reservation->tel           = $validated['tel'];
        $reservation->date          = $validated['date'];
        $reservation->heure         = $validated['heure'];
        $reservation->personnes     = $validated['personnes'];

        if (empty($validated['commentaires'])){
            $reservation->commentaires  = '';
        }

        $reservation->commentaires  = $validated['commentaires'];

        if ($validated['confirmation'] == '0'){

            $reservation->confirmation = 0;

        }elseif ($validated['confirmation'] == '1'){

            $reservation->confirmation = 1;

        }else{

            $reservation->confirmation = null;

        }

        return $reservation;

    }
}