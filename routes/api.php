<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Animal;
use App\Models\Type;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\TypeController;

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

// Liste tous les animaux
Route::get('/animaux', [AnimalController::class, 'list']);

// Liste tous les animaux d'un type
Route::get('/types/{id}/animaux', [TypeController::class, 'listanimaux']);