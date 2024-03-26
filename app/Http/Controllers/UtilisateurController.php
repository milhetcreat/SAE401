<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    // Liste tous les utilisateurs
    public function list(Request $request)
    {
        $utilisateurs = Utilisateur::get();
        return response()->json($utilisateurs);
    }

    // Ajout d'un utilisateur
    public function add(Request $request)

    $utilisateur = new User;
    $utilisateur->name = $request->nom;
    $utilisateur->prenom = $request->prenom;
    $utilisateur->genre = $request->genre;
    $utilisateur->localisation = $request->localisation;
    $utilisateur->pdp = $request->pdp;
    $utilisateur->genre = $request->genre;
    $ok = $utilisateur->save();
    if ($ok) {
    return response()->json(["status" => 1, "message" => "Inscription Confirmée"],201);
    } else {
    return response()->json(["status" => 0, "message" => "pb lors de
    l'inscription"],400);
    }

    // Récupérer les informations d'un utilisateur
    public function getinfos(Request $request)
    {
        $utilisateur = Utilisateur::get();
        return response()->json($utilisateur);
    }
}
