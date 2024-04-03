<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

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
        $utilisateur->telephone = $request->telephone;
        $ok = $utilisateur->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "Inscription Confirmée"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de
        l'inscription"],400);
        }
    
    }
   
    // Ajout d'une photo d'un utilisateur
    public function uploadpdp(Request $request) {
        $file = $request->file('photo');
        $truc = $request->truc;
        if ($file) {
        $imageName = "categorie".time().'.'.$file->extension();
        $imagePath = storage_path(). '/app/public/files';
        $file->move($imagePath, $imageName);
        }
        return response()->json([
        'truc' => $truc,
        'photo' => $imagePath."/".$imageName
        ]
        );
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

    // modifier un utilisateur
    public function modifier(Request $request, $id){
        $utilisateur = User::find($id);
        var_dump($utilisateur);
        if (!$utilisateur) {
            return response()->json(["status" => 0, "message" => "cet utilisateur n'existe pas"],400);
        }
        $utilisateur->name = $request->nom;
        $utilisateur->email = $request->email;
        $utilisateur->password = $request->password;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->genre = $request->genre;
        $utilisateur->localisation = $request->localisation;
        $utilisateur->pdp = $request->pdp;
        $utilisateur->telephone = $request->telephone;
        $ok = $utilisateur->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "utilisateur modifié"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de la suppression"],400);
        }
    }

    public function login(LoginRequest $request){
        // -- LoginRequest a verifié que les email et password étaient présents
        // -- il faut maintenant vérifier que les identifiants sont corrects
        $credentials = request(['email','password']);
        if(!Auth::attempt($credentials)) {
        return response()->json([
        'status' => 0,
        'message' => 'Utilisateur inexistant ou identifiants incorrects'
        ],401);
        }
        // tout est ok, on peut générer le token
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->plainTextToken;
        return response()->json([
        'status' => 1,
        'accessToken' =>$token,
        'token_type' => 'Bearer',
        'user_id' => $user->id
        ]);
       }
}

