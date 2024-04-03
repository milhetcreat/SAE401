<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    // Ajout d'un utilisateur
    public function add(Request $request) {
        $message = new Message;
        $message->ID_UTILISATEUR = $request->ID_UTILISATEUR;
        $message->ID_DESTINATAIRE = $request->ID_DESTINATAIRE;
        $message->ID_CONVERSATION = Message::max('ID_CONVERSATION') + 1;
        $message->contenu = $request->contenu;
        var_dump ($message);
        $ok = $message->save();
        if ($ok) {
        return response()->json(["status" => 1, "message" => "Message envoyé avec succès"],201);
        } else {
        return response()->json(["status" => 0, "message" => "pb lors de
        l'envoi du message"],400);
        }
    
    }

    // Liste tous les messages d'une conversation 
    public function list(Request $request)
    {
        $utilisateurs = User::get();
        return response()->json($utilisateurs);
    }
}
