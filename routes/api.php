<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\FavorisController;
use App\Http\Controllers\SignalementController;
use App\Http\Controllers\MessageController;
use App\Http\Requests\LoginRequest;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
   });   

// >>>>>>>>>>>>>>>>>>>> Animaux >>>>>>>>>>>>>>>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Liste tous les animaux + recherche (type, localisation et race)
Route::get('/animaux', [AnimalController::class, 'list']);

// Liste les détails d'un animal
Route::get('/animaux/{id}', [AnimalController::class, 'details']);

// Liste tous les animaux d'un utilisateur
Route::get('/animaux/{id}/users', [AnimalController::class, 'listusers']);

// Ajouter un animal
Route::post('/animaux', [AnimalController::class, 'add']);

// Supprimer un animal
Route::delete('/animaux/{id}', [AnimalController::class, 'supp']);

// Modifier un animal
Route::put('/animaux/{id}', [AnimalController::class, 'modifier']);

// Liste tous les animaux d'un type
Route::get('/types/{id}/animaux', [AnimalController::class, 'listanimaux']);


// >>>>>>>>>>>>>>>>>>>> Types >>>>>>>>>>>>>>>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Liste tous les types
Route::get('/types', [TypeController::class, 'list']);


// >>>>>>>>>>>>>>>>>>>> Favoris >>>>>>>>>>>>>>>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Compte le nb de likes sur un animal
Route::get('/favoris/{id}', [FavorisController::class, 'count']);

// Liste les animaux mis en favoris d'un utilisateur
Route::middleware('auth:sanctum')->get('/favoris/{id}/users', [FavorisController::class, 'list']);


// >>>>>>>>>>>>>>>>>>>> Signalement >>>>>>>>>>>>>>>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Liste tous les signalements
Route::middleware('auth:sanctum')->get('/signalements', [SignalementController::class, 'list']);

// Ajouter un signalement
Route::middleware('auth:sanctum')->post('/signalements', [SignalementController::class, 'add']);

// Supprimer un signalement
Route::middleware('auth:sanctum')->delete('/signalements/{id}', [SignalementController::class, 'supp']);


// >>>>>>>>>>>>>>>>>>>> Utilisateurs >>>>>>>>>>>>>>>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Liste tous les utilisateurs 
Route::get('/utilisateurs', [UtilisateurController::class, 'list']);

// Ajouter un utilisateur
Route::middleware('auth:sanctum')->post('/utilisateurs', [UtilisateurController::class, 'addutilisateur']);

// Récupérer les informations de l'utilisateur connecté
Route::middleware('auth:sanctum')->get('/utilisateurs/{id}', [UtilisateurController::class, 'getinfos']);

// Modifier les informations d'un utilisateur
Route::put('/utilisateurs/{id}', [UtilisateurController::class, 'modifier']);


// -- gestion des tokens
Route::post('/login', [UtilisateurController::class, 'login']);

// >>>>>>>>>>>>>>>>>>>> Messages >>>>>>>>>>>>>>>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Liste des messages d'une conversation
Route::middleware('auth:sanctum')->get('/chat',[MessageController::class,'list']);

// Liste des messages d'une conversation
Route::middleware('auth:sanctum')->post('/chat',[MessageController::class,'add']);