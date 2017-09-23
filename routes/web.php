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

/**
 * Les Routes sont un élément essentiel en programmation web.
 * Elles permettent au framework de gérer simplement les comportements à avoir en fonction des URL et des requêtes HTTP.
 *
 * Pour simplifier, dans le cadre de notre projet, on s'autorisera les approximations suivantes :
 *
 * Route::get() => lorsque l'on souhaite récupérer le contenu d'une page.
 * Route::delete() => pour supprimer du contenu
 * Route::post() => pour la création ou la modification de contenu.
 *
 * On peut également grouper plusieurs routes autour d'un préfixe commun (ça permet d'éviter les URL à rallonge).
 * Il est possible de donner un nom aux routes, pour les utiliser facilement dans les vues ou les controllers.
 *
 * Pour mieux comprendre, se référer à la documentation: https://laravel.com/docs/5.4/routing
 */

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::group(['prefix' => 'edt'], function() {
    Route::get('/', 'EdtController@index')->name('edt.index'); // get => /edt/
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home'); // get => /home