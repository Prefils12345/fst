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
    return view("fst.home.index");
});

Route::get('logout','UtilisateurController@logout')->name('logout');

Route::prefix('user')->group(function(){
    Route::get('/','UtilisateurController@index')->name('user.index');
    Route::get('create','UtilisateurController@create')->name('user.create');
    Route::post('store','UtilisateurController@store')->name('user.store');
    Route::post('login','UtilisateurController@login')->name('user.login');
    Route::get('{id}/edit','UtilisateurController@edit')->name('user.edit');
    Route::get('{id}/show','UtilisateurController@show')->name('user.show');
    Route::put('{id}/update','UtilisateurController@update')->name('user.update');
    Route::delete('{id}/destroy','UtilisateurController@destroy')->name('user.destroy');
});

Route::prefix('etudiant')->group(function(){
    Route::get('/','EtudiantController@index')->name('etudiant.index');
    Route::get('create','EtudiantController@create')->name('etudiant.create');
    Route::post('store','EtudiantController@store')->name('etudiant.store');
    Route::get('{id}/edit','EtudiantController@edit')->name('etudiant.edit');
    Route::get('{id}/show','EtudiantController@show')->name('etudiant.show');
    Route::put('{id}/update','EtudiantController@update')->name('etudiant.update');
    Route::delete('{id}/destroy','EtudiantController@destroy')->name('etudiant.destroy');
});

Route::prefix('souscription')->group(function(){
    Route::get('/','SouscriptionController@index')->name('souscription.index');
    Route::get('create','SouscriptionController@create')->name('souscription.create');
    Route::post('store','SouscriptionController@store')->name('souscription.store');
    Route::get('{id}/edit','SouscriptionController@edit')->name('souscription.edit');
    Route::get('{id}/show','SouscriptionController@show')->name('souscription.show');
    Route::put('{id}/update','SouscriptionController@update')->name('souscription.update');
    Route::delete('{id}/destroy','SouscriptionController@destroy')->name('souscription.destroy');
});

Route::prefix('specialite')->group(function(){
    Route::get('/','SpecialiteController@index')->name('specialite.index');
    Route::get('create','SpecialiteController@create')->name('specialite.create');
    Route::post('store','SpecialiteController@store')->name('specialite.store');
    Route::get('{id}/edit','SpecialiteController@edit')->name('specialite.edit');
    Route::get('{id}/show','SpecialiteController@show')->name('specialite.show');
    Route::put('{id}/update','SpecialiteController@update')->name('specialite.update');
    Route::delete('{id}/destroy','SpecialiteController@destroy')->name('specialite.destroy');
});

Route::prefix('annee')->group(function(){
    Route::get('/','AnneeUniversitaireController@index')->name('annee.index');
    Route::get('create','AnneeUniversitaireController@create')->name('annee.create');
    Route::post('store','AnneeUniversitaireController@store')->name('annee.store');
    Route::get('{id}/edit','AnneeUniversitaireController@edit')->name('annee.edit');
    Route::get('{id}/show','AnneeUniversitaireController@show')->name('annee.show');
    Route::put('{id}/update','AnneeUniversitaireController@update')->name('annee.update');
    Route::delete('{id}/destroy','AnneeUniversitaireController@destroy')->name('annee.destroy');
});

Route::prefix('formation')->group(function(){
    Route::get('/','FormationController@index')->name('formation.index');
    Route::get('create','FormationController@create')->name('formation.create');
    Route::post('store','FormationController@store')->name('formation.store');
    Route::get('{id}/edit','FormationController@edit')->name('formation.edit');
    Route::get('{id}/show','FormationController@show')->name('formation.show');
    Route::put('{id}/update','FormationController@update')->name('formation.update');
    Route::delete('{id}/destroy','FormationController@destroy')->name('formation.destroy');
});

Route::prefix('mention')->group(function(){
    Route::get('/','MentionController@index')->name('mention.index');
    Route::get('create','MentionController@create')->name('mention.create');
    Route::post('store','MentionController@store')->name('mention.store');
    Route::get('{id}/edit','MentionController@edit')->name('mention.edit');
    Route::get('{id}/show','MentionController@show')->name('mention.show');
    Route::put('{id}/update','MentionController@update')->name('mention.update');
    Route::delete('{id}/destroy','MentionController@destroy')->name('mention.destroy');
});

Route::prefix('diplome')->group(function(){
    Route::get('/','DiplomeController@index')->name('diplome.index');
    Route::get('create','DiplomeController@create')->name('diplome.create');
    Route::post('store','DiplomeController@store')->name('diplome.store');
    Route::get('{id}/edit','DiplomeController@edit')->name('diplome.edit');
    Route::get('{id}/show','DiplomeController@show')->name('diplome.show');
    Route::put('{id}/update','DiplomeController@update')->name('diplome.update');
    Route::delete('{id}/destroy','DiplomeController@destroy')->name('diplome.destroy');
});

Route::prefix('niveau')->group(function(){
    Route::get('/','NiveauController@index')->name('niveau.index');
    Route::get('create','NiveauController@create')->name('niveau.create');
    Route::post('store','NiveauController@store')->name('niveau.store');
    Route::get('{id}/edit','NiveauController@edit')->name('niveau.edit');
    Route::get('{id}/show','NiveauController@show')->name('niveau.show');
    Route::put('{id}/update','NiveauController@update')->name('niveau.update');
    Route::delete('{id}/destroy','NiveauController@destroy')->name('niveau.destroy');
});

// Route::get("about-us", function(){
//     return view("fst.about.index");
// })->name("fst.about");

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
