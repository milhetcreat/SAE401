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
    // ex: http://localhost/SAE401/public/api/utilisateurs
    public function addutilisateur(Request $request) {
        $file = $request->file('pdp');

        $utilisateur = new User;
        $utilisateur->id = User::max('id') + 1;
        $utilisateur->name = $request->name;
        $utilisateur->email = $request->email;
        $utilisateur->password = $request->password;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->genre = $request->genre;
        $utilisateur->localisation = $request->localisation;
        if ($file) {
            $imageName = "user" . time() . '.' . $file->extension();
            $imagePath = public_path() . '/images';
            $file->move($imagePath, $imageName);
            $utilisateur->pdp = $imageName;
        }
        $utilisateur->telephone = $request->telephone;
        $ok = $utilisateur->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "Inscription Confirmée"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de
        l'inscription"],400);
        }
    
    }

    // Récupérer les informations d'un utilisateur
    // ex: 
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
        $file = $request->file('pdp');

        $utilisateur = User::find($id);
        var_dump($utilisateur);
        if (!$utilisateur) {
            return response()->json(["status" => 0, "message" => "cet utilisateur n'existe pas"],400);
        }
        $utilisateur->name = $request->name;
        $utilisateur->email = $request->email;
        $utilisateur->password = $request->password;
        $utilisateur->prenom = $request->prenom;
        $utilisateur->genre = $request->genre;
        $utilisateur->localisation = $request->localisation;
        if ($file) {
            $imageName = "user" . time() . '.' . $file->extension();
            $imagePath = public_path() . '/images';
            $file->move($imagePath, $imageName);
            $utilisateur->pdp = $imageName;
        }
        $utilisateur->telephone = $request->telephone;
        $ok = $utilisateur->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "utilisateur modifié"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de la suppression"],400);
        }
    }

    public function logout(Request $request) {
        $ok = $request->user()->currentAccessToken()->delete();
        if ($ok) {
            return response()->json(["status" => 1, "message" => "utilisateur déconnecté"],201);
            } else {
            return response()->json(["status" => 0, "message" => "pb lors de la déconnexion"],400);
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

