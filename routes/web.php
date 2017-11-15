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

/*Route::get('/', function () {
    return view('welcome');
})->name('index');*/

//Auth::routes();
Route::get('/home', 'EdtController@index')->name('edt.index'); // get => /edt

//////////////////////////////////////
/// Set Authentification routes manually
// Authentication Routes...
Route::get('/', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('/', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => '',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...
Route::get('register', [
    'as' => 'register',
    'uses' => 'Auth\RegisterController@showRegistrationForm'
]);
Route::post('register', [
    'as' => '',
    'uses' => 'Auth\RegisterController@register'
]);