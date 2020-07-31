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

use App\Projets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


Route::get('/', 'ProjetController@index')->name('Acceuil');
Route::get('home', 'ProjetController@index');
Route::get('c19', 'ProjetController@covid19')->name('covid19');

Route::get('/covid', 'ProjetController@covid')->name('covid');
Route::get('/carte', 'ProjetController@carte')->name('carte');

Route::get('/voir', 'ProjetController@voir')->name('voir');


Route::get('/soumettre', 'ProjetController@create')->name('soumettre')->middleware('auth');

Route::post('/soumettre', 'ProjetController@store')->name('p.store')->middleware('auth');


Route::get('/projet/{projets}', 'ProjetController@show')->name('projet');

Route::get('/projet/{projets}/edit', 'ProjetController@edit')->name('edit')->middleware('auth');
Route::patch('/projet/{projets}', 'ProjetController@update')->name('p.update')->middleware('auth');
Route::delete('/projet/{projets}', 'ProjetController@delete')->name('p.delete')->middleware('auth');


Route::get('/reset',    'ProfilController@reset')->name('reset');
Route::get('/editer', 'ProjetController@editer')->name('editer')->middleware('auth');

Auth::routes(['verify'=> true]);
//post route

Route::post('/editer', 'ProfilController@store')->name('ed.store')->middleware('auth');
Route::get('/categorie/{name}', 'ProjetController@showByCategorie')->name('categorie')->middleware('auth');
Route::get('/userproject', 'ProjetController@userproject')->name('userp')->middleware('auth');


Route::get('login/facebook', 'Auth\LoginController@facebookredirectToProvider')->name('facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@facebookhandleProviderCallback');
Route::get('login/google', 'Auth\LoginController@redirectToProvider')->name('google');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');


