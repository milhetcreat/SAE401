<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;
// use Illuminate\Support\Facades\DB;

class AnimalController extends Controller
{
    // Liste tous les animaux + recherche
    public function list(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->search;
            $animaux = Animal::select('ANIMAL.*')->join('TYPE', 'ANIMAL.ID_TYPE', '=', 'TYPE.ID_TYPE')
            ->where('TYPE.NOM', 'like', '%' . $search . '%')
            ->orWhere('ANIMAL.LOCALISATION', 'like', '%' . $search . '%')
            ->orWhere('ANIMAL.RACE', 'like', '%' . $search . '%')->get();
            // si la recherche n'a pas de résultats : 
            if ($animaux->isEmpty()) {
                return response()->json(['message' => 'Aucun résultat trouvé.'], 404);
            }
        } else {
            $animaux = Animal::get();
        }
        return response()->json($animaux);
    }

    // Liste les détails d'un animal
    public function details(Request $request, $id)
    {
        $animal = Animal::find($id)->user()->get();
        if ($animal) {
            // Retournez l'animal trouvé
            return response()->json($animal);
        } else {
            // Retournez une réponse indiquant que l'animal n'a pas été trouvé
            return response()->json(["status" => 0, "message" => "Animal introuvable"], 404);
        }
    }

    // Liste tous les animaux d'un utilisateur
    public function listusers(Request $request, $id)
    {
        $animaux = ANIMAL::where('ID_UTILISATEUR' , '=' , $id)->get();
        if (!$animaux) {
            return response()->json(["status" => 0, "message" => "Aucun animal !"],404);
        }
        else{
            return response()->json($animaux);
        }
    }

    // Liste tous les animaux d'un type
    public function listanimaux(Request $request, $id)
    {
        $animaux = ANIMAL::where('ID_TYPE' , '=' , $id)->get();
        if (!$animaux) {
            return response()->json(["status" => 0, "message" => "Aucun animal !"],404);
        }
        else{
            return response()->json($animaux);
        }
    }

    // Ajout d'un animal
    public function add(Request $request)
    {
        $animal = new Animal;
        $animal->ID_UTILISATEUR = $request->ID_UTILISATEUR;
        $animal->ID_ANIMAL = Animal::max('ID_ANIMAL') + 1;
        $animal->ID_TYPE = $request->ID_TYPE;
        $animal->PRENOM = $request->PRENOM;
        $animal->AGE = $request->AGE;
        $animal->GENRE = $request->GENRE;
        $animal->TAILLE = $request->TAILLE;
        $animal->POIDS = $request->POIDS;
        $animal->PHOTO = $request->PHOTO;
        $animal->LOCALISATION = $request->LOCALISATION;
        $animal->RACE = $request->RACE;
        $animal->SPECIFICITE = $request->SPECIFICITE;
        $animal->DESCRIPTION = $request->DESCRIPTION;
        $ok = $animal->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "Animal ajouté"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de l'ajout"],400);
        }
    }

    // modifier un animal
    public function modifier(Request $request, $id){
        $animal = Animal::find($id);
        if (!$animal) {
            return response()->json(["status" => 0, "message" => "cet animal n'existe pas"],400);
        }
        $animal->ID_UTILISATEUR = $request->ID_UTILISATEUR;
        $animal->ID_ANIMAL = $request->ID_ANIMAL;
        $animal->ID_TYPE = $request->ID_TYPE;
        $animal->PRENOM = $request->PRENOM;
        $animal->AGE = $request->AGE;
        $animal->GENRE = $request->GENRE;
        $animal->TAILLE = $request->TAILLE;
        $animal->POIDS = $request->POIDS;
        $animal->PHOTO = $request->PHOTO;
        $animal->LOCALISATION = $request->LOCALISATION;
        $animal->RACE = $request->RACE;
        $animal->SPECIFICITE = $request->SPECIFICITE;
        $animal->DESCRIPTION = $request->DESCRIPTION;
        $ok = $animal->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "animal modifié"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de la suppréssion"],400);
        }
    }

    // supprimer un animal
    public function supp(Request $request, $id)
    {
        $animal = Animal::find($id);
        if (!$animal) {
            return response()->json(["status" => 0, "message" => "cet animal n'existe pas"],400);
        }
        $ok = $animal->delete();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "animal supprimé"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de la suppréssion"],400);
        }
    }
}
