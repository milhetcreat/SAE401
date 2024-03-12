<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    
    // Liste tous les animaux d'un type
    public function listanimaux(Request $request, $id)
    {
        $animaux = Type::find($id)->animaux()->get();
        return response()->json($animaux);
    }
}
