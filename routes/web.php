<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth']);

 
Route::get('/secretaire', function () {
    return view('secretaire');
})->middleware(['auth'])->name('secretaire');
Route::get('/carte',function(){
    return view ('carte');
})->name("carte");
require __DIR__.'/auth.php';
