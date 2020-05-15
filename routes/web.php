<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'ProjetController@index')->name('Acceuil');
Route::get('home', 'ProjetController@index');

Route::get('/covid', function (){return view('island.covid');})->name('covid');
Route::get('/carte', function (){return view('island.Voir-sur-la-carte');})->name('carte');

Route::get('/voir', 'ProjetController@voir')->name('voir');


Route::get('/soumettre', 'ProjetController@create')->name('soumettre')->middleware('auth');

Route::post('/soumettre', 'ProjetController@store')->name('p.store')->middleware('auth');


Route::get('/detail/{projets}', 'ProjetController@show')->name('detail');

Route::get('/reset', function (){
    return view('Island.Reset-Password');
})->name('reset');
Route::get('/editer', function () {return view('island.Editer-son-profil');
})->name('editer')->middleware('auth');

Auth::routes();
//post route

Route::post('/editer', 'ProfilController@store')->name('ed.store')->middleware('auth');
Route::get('/categorie/{name}', 'ProjetController@showByCategorie')->name('categorie')->middleware('auth');


Route::get('login/facebook', 'Auth\LoginController@facebookredirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@facebookhandleProviderCallback');
Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
