<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtatController;
use App\Http\Controllers\TacheController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\EquipementController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\EtablissementController;
use App\Http\Controllers\PieceActiviteController;

Route::middleware(['auth'])->group(function () {
    Route::resource('/Etablissement', EtablissementController::class);
    Route::resource('/Service', ServiceController::class);
    Route::resource('/Categorie', CategorieController::class);
    Route::resource('/Equipement', EquipementController::class);
    Route::resource('/Tache', TacheController::class);
    Route::resource('/Etat', EtatController::class);
    Route::resource('/Spécialite', SpecialiteController::class);
    Route::resource('/Technicien', TechnicienController::class);
    Route::resource('/Activite', ActiviteController::class);
    Route::resource('/PieceActivite', PieceActiviteController::class);

    Route::get('/', [Controller::class ,'home']);
});
