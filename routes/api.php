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

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [UserController::class], 'getUser')->name('user');
});

Route::resource('/travels', TravelController::class);

// Validation de l'inscription dans la BDD
Route::post('/register', [ConnexionController::class, 'Register'])->name('register');

// Connexion de l'utilisateur
Route::post('/login', [ConnexionController::class, 'login'])->name('login');
Route::post('/tokens/create', [AuthController::class, 'createToken']);