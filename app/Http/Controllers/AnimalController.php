<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimalController extends Controller
{
    // Liste tous les animaux
    // public function list(Request $request)
    // {
    //     $animaux = Animal::get();
    //     return response()->json($animaux);
    // }
    // Liste tous les animaux + recherche
    public function list(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->search;
            // $animaux = Animal::with('TYPE')->where('NOM','like',"%".$search."%")->get();
            $animaux = DB::select('select * from produits where id = ?', [1]);
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
