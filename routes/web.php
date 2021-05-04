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
//listing des animaux
Route::get('animals', 'AnimalController@index')->name('animals.index');

//affichage de la page de création
Route::get('animals/create', 'AnimalController@create')->name('animals.create');

//création
Route::post('animals', 'AnimalController@store')->name('animals.store');

//affichage de la page d'un article
Route::get('animals/{animal}', 'AnimalController@show')->name('animals.show');

//affichage de la page d'édition
Route::get('animals/{article}/edit', 'AnimalController@edit')->name('animals.edit');

//modification
Route::put('animals/{animal}', 'AnimalController@update')->name('animals.update');

//suppression
Route::delete('animals/{animal}', 'AnimalController@destroy')->name('animals.destroy');
