<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Animal;
use App\Models\Type;
use App\Models\User;
use App\Models\Favoris;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\FavorisController;

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


// >>>>>>>>>>>>>>>>>>>> Utilisateurs >>>>>>>>>>>>>>>
// >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

// Liste tous les utilisateurs 
Route::get('/utilisateurs', [UtilisateurController::class, 'list']);

// Ajouter un utilisateur
Route::post('/utilisateurs', [UtilisateurController::class, 'addutilisateur']);