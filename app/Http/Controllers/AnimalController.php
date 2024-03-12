<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    // Liste tous les animaux
    public function list(Request $request)
    {
        $animaux = Animal::with('TYPE')->get();
        return response()->json($animaux);
    }
}
