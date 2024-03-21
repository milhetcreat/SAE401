<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favoris;

class FavorisController extends Controller
{
    // Compte le nb de likes sur un animal
    public function count(Request $request, $id)
    {
        $nombre_likes = Favoris::where('ID_ANIMAL', $id)->count();
        return response()->json(['nombre_likes' => $nombre_likes]);
    }

    // Liste les animaux mis en favoris d'un utilisateur
    public function list(Request $request, $id)
    {
        $animaux = Favoris::join('ANIMAL', 'ANIMAL.ID_ANIMAL', '=', 'FAVORIS.ID_ANIMAL')->where('FAVORIS.ID_UTILISATEUR', $id)->get();
        if (!$animaux) {
            return response()->json(["status" => 0, "message" => "Aucun animal mis en favoris !"],400);
        }
        else{
            return response()->json($animaux);
        }
    }
}
