<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    // Liste tous les animaux + recherche
    public function list(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->search;
            $animaux = Animal::select('ANIMAL.*')->join('TYPE', 'ANIMAL.ID_TYPE', '=', 'TYPE.ID_TYPE')->where('TYPE.NOM', 'like', '%' . $search . '%')->orWhere('ANIMAL.LOCALISATION', 'like', '%' . $search . '%')->orWhere('ANIMAL.RACE', 'like', '%' . $search . '%')->get();
        } else {
            $animaux = Animal::get();
        }
        return response()->json($animaux);
    }

    // Liste tous les animaux d'un type
    public function listanimaux(Request $request, $id)
    {
        $animaux = ANIMAL::where('ID_TYPE' , '=' , $id)->get();
        return response()->json($animaux);
    }
}
