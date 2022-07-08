<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\SuiviController;
use Illuminate\Support\Facades\Route;

/*
 * Route::get('/', function () {
    return view('auth.login');
});**/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/tutorat/dashboard', [AdminController::class, 'home'])->name('dashboard.home');
Route::get('/etudiant/profile', [AdminController::class, 'profile'])->name('etudiant.profile');
Route::get('/tutorat/poster-un-document', [AdminController::class, 'index'])->name('doc.index');

//GESTION DE LA LISTE DES ETUDIANTS
Route::get('/etudiant/licence1/liste', [EtudiantController::class, 'listeL1'])->name('licence1.liste');
Route::get('/etudiant/licence2/liste', [EtudiantController::class, 'listeL2'])->name('licence2.liste');
Route::get('/etudiant/licence3/liste', [EtudiantController::class, 'listeL3'])->name('licence3.liste');

//GESTION DES CLASSES VIRTUELLES
Route::get('/classe/evaluer', [ClasseController::class, 'note'])->name('classe.note');
Route::get('/classe/programmer', [ClasseController::class, 'programmer'])->name('classe.programmer');
Route::get('/classe/encours', [ClasseController::class, 'encours'])->name('classe.encours');
Route::get('/classe/terminer', [ClasseController::class, 'terminer'])->name('classe.terminer');

//SUIVIS DES ETUDIANTS
Route::get('/etudiants/suivis', [SuiviController::class, 'progression'])->name('etudiant.progression');
