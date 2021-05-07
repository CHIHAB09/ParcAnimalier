<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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
Route::get('/', function (){
    return view('welcome');
}); 


//listing des animaux
Route::get('animals', [AnimalController::class, 'index'])->name('animals.index');

//affichage de la page de création
Route::get('animals/create', [AnimalController::class, 'create'])->name('animals.create');

//création
Route::post('animals/store', [AnimalController::class, 'store'])->name('animals.store');

//affichage de la page d'un article
Route::get('animal/{id}', [AnimalController::class, 'show'])->name('animal.show');

//affichage de la page d'édition
Route::get('animals/{id}/edit', [AnimalController::class, 'edit'])->name('animals.edit');

//modification
Route::put('animals/{id}', [AnimalController::class, 'update'])->name('animals.update');

//suppression
Route::delete('animals/{id}', [AnimalController::class, 'destroy'])->name('animals.destroy');
