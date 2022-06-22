<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\SecretaireController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [EtudiantController::class,'index'])->middleware(['auth'])->name('home');


 
Route::resource('secretaire', SecretaireController::class)->middleware(['auth']);

Route::get('/carte/{id}',[EtudiantController::class,'sendMail']);
Route::resource('/etudiant', EtudiantController::class)->middleware(['auth']);
Route::get('/etudiant/{id}/edit', [EtudiantController::class, 'edit'])->middleware(['auth']);
require __DIR__.'/auth.php';
