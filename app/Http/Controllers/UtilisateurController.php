<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UtilisateurController extends Controller
{
    // Liste tous les utilisateurs
    public function list(Request $request)
    {
        $utilisateurs = User::get();
        return response()->json($utilisateurs);
    }



    // Ajout d'un utilisateur
    public function addutilisateur(Request $request) {
        $utilisateur = new User;
        $utilisateur->id = User::max('id') + 1;
        $utilisateur->name = $request->nom;
        $utilisateur->email = $request->email;
        $utilisateur->password = $request->password;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->genre = $request->genre;
        $utilisateur->localisation = $request->localisation;
        $utilisateur->pdp = $request->pdp;
        $ok = $utilisateur->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "Inscription Confirmée"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de
        l'inscription"],400);
        }
    
    }
   
    // Récupérer les informations d'un utilisateur
    public function getinfos(Request $request, $id)
    {
        $utilisateur = User::find($id);
        if ($utilisateur) {
            // Retournez les informations trouvées
            return response()->json($utilisateur);
        } else {
            // Retournez une réponse indiquant que les informations sur l'utilisateur n'ont pas été trouvées
            return response()->json(["status" => 0, "message" => "Utilisateur introuvable"], 404);
        }
    }
}

