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
}
