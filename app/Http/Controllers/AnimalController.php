<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    // Liste tous les animaux
    public function list(Request $request)
    {
        $animaux = Animal::get();
        return response()->json($animaux);
    }

    // Liste tous les animaux d'un type
    public function listanimaux(Request $request, $id)
    {
        $animaux = ANIMAL::where('ID_TYPE' , '=' , $id)->get();
        return response()->json($animaux);
    }
}
