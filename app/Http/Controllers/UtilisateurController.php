<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
<<<<<<< Updated upstream
    //
=======
    // Liste tous les utilisateurs
    public function list(Request $request)
    {
        $utilisateurs = Utilisateur::get();
        return response()->json($utilisateurs);
    }

    // Ajout d'un utilisateur
    public function add(Request $request)

    $utilisateur = new Utilisateur;
    $utilisateur->nom = $request->nom;
    $utilisateur->qte = $request->qte;
    $ok = $utilisateur->save();
    if ($ok) {
    return response()->json(["status" => 1, "message" => "Inscription Confirmée"],201);
    } else {
    return response()->json(["status" => 0, "message" => "pb lors de
    l'inscription"],400);
    }

>>>>>>> Stashed changes
}
