<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TravelController;


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

// Recuperation des voyages pour l'accueil
Route::get('/travels', [TravelController::class, 'index'])->name('travels.index');

// Affichage des details d'un voyage
Route::get('/travels/{travel}', [TravelController::class, 'show'])->name('travels.show');

// Validation de l'inscription dans la BDD
Route::post('/register', [ConnexionController::class, 'Register'])->name('register');

// Connexion de l'utilisateur
Route::post('/login', [ConnexionController::class, 'login'])->name('login');
// Route::post('/tokens/create', [AuthController::class, 'createToken']);

Route::middleware('auth:sanctum')->group(function () {
    // Récupération de l'utilisateur
    Route::get('/user', function(Request $request) {return $request->user();});

    // Deconnexion
    Route::post('/logout', [ConnexionController::class, 'logout'])->name('logout');

    // Toutes les routes pour travels
    Route::resource('/travels', TravelController::class)->except(['index', 'show']);

    // Suppression d'une image d'un jour
    Route::delete('/imgDay/{id}', [TravelController::class, 'destroyImgDay'])->name('imgDay.destroy');
});
