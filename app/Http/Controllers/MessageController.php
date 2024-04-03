<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;

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
    public function listmessages(MessageRequest $request) {
        
            $messages = Message::where([['ID_UTILISATEUR', '=' , $request->idutilisateur],['ID_DESTINATAIRE', '=' , $request->iddestinataire],['ID_ANIMAL', '=' , $request->idanimal]])->orWhere([['ID_UTILISATEUR', '=' , $request->iddestinataire],['ID_DESTINATAIRE', '=' , $request->idutilisateur],['ID_ANIMAL', '=' , $request->idanimal]])->->get();
            if (!$messages) {
                return response()->json(["status" => 0, "message" => "Aucun message échangé avec cet utilisateur pour le moment !"],404);
            }
            else{
                return response()->json($messages);
            }     
    }


}
