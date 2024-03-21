<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signalement;

class SignalementController extends Controller
{
    // Liste tous les signalements
    public function list(Request $request)
    {
        $signalements = Signalement::get();
        if (!$signalements) {
            return response()->json(["status" => 0, "message" => "Aucun signalements !"],400);
        }
        else{
            return response()->json($signalements);
        }
    }

    // Ajout d'un signalement
    public function add(Request $request)
    {
        $signalement = new Signalement;
        $signalement->ID_ANIMAL = $request->ID_ANIMAL;
        $signalement->ID_UTILISATEUR = $request->ID_UTILISATEUR;
        $signalement->ID_SIGNALEMENT = Signalement::max('ID_SIGNALEMENT') + 1;
        $signalement->RAISON = $request->RAISON;
        $signalement->DATE = $request->DATE;
        $ok = $signalement->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "Signalement pris en compte"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de l'ajout"],400);
        }
    }
}
// $dateCreation = $signalement->created_at;
