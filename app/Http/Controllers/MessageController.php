<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use App\Http\Requests\MessageRequest;
use App\Http\Requests\ConversationRequest;
use Illuminate\Support\Facades\DB; 

class MessageController extends Controller
{
    // Ajout d'un message
    public function add(Request $request) {
        $message = new Message;
        $message->ID_UTILISATEUR = $request->ID_UTILISATEUR;
        $message->ID_DESTINATAIRE = $request->ID_DESTINATAIRE;
        $message->ID_ANIMAL = $request->ID_ANIMAL;

        $messages = Message::where([['ID_UTILISATEUR', '=' , $request->ID_UTILISATEUR],['ID_DESTINATAIRE', '=' , $request->ID_DESTINATAIRE],['ID_ANIMAL', '=' , $request->ID_ANIMAL]])->orWhere([['ID_UTILISATEUR', '=' , $request->ID_DESTINATAIRE],['ID_DESTINATAIRE', '=' , $request->ID_UTILISATEUR],['ID_ANIMAL', '=' , $request->ID_ANIMAL]])->orderBy('DATE', 'DESC')->get();
            if (count($messages)==0) {
                $message->ID_CONVERSATION = Message::max('ID_CONVERSATION') + 1;
            }
            else{
                $message->ID_CONVERSATION = $messages[0]->ID_CONVERSATION;
            }   
        $message->ID_MESSAGE = Message::max('ID_MESSAGE') + 1;
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
    // ex : http://localhost/SAE401/public/api/conversations/messages?idutilisateur=3&iddestinataire=5&idanimal=2
    public function listmessages(MessageRequest $request) {

            $messages = Message::where([['ID_UTILISATEUR', '=' , $request->idutilisateur],['ID_DESTINATAIRE', '=' , $request->iddestinataire],['ID_ANIMAL', '=' , $request->idanimal]])->orWhere([['ID_UTILISATEUR', '=' , $request->iddestinataire],['ID_DESTINATAIRE', '=' , $request->idutilisateur],['ID_ANIMAL', '=' , $request->idanimal]])->orderBy('DATE', 'DESC')->limit(11)->get();
            if (count($messages)==0) {
                return response()->json(["status" => 0, "message" => "Aucun message échangé entre ces utilisateurs!"],404);
            }
            else{
                return response()->json($messages);
            }     
    }

    // Liste de toutes les conversation
    // ex : http://localhost/SAE401/public/api/conversations?idutilisateur=3
    public function listconversations(ConversationRequest $request) {
        $maxdate = Message::select(DB::raw('MAX(DATE)'))->where('ID_UTILISATEUR','=',$request->idutilisateur)->groupBy('ID_CONVERSATION');
        $conversations = Message::select('MESSAGES.*')->whereIn('DATE',$maxdate)->with('user', 'animal', 'destinataire')->get();
            if (!$conversations) {
                return response()->json(["status" => 0, "message" => "Aucune conversation pour le moment !"],404);
            }
            else{
                return response()->json($conversations);
            }
        }
    }

