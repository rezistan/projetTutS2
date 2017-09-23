<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;

/**
 * Class EdtController
 * @package App\Http\Controllers
 *
 * Les controllers font le lien entre les modèles et les vues. Je vais pas trop m'étendre là-dessus, vu qu'on a commencé
 * à aborder le sujet en cours.
 *
 * Créer un controller : php artisan make:controller NameofController
 *
 * Pour connaître leur application sur Laravel : https://laravel.com/docs/5.4/controllers
 */
class EdtController extends Controller
{
    /**
     * On s'assure que l'utilisateur est connecté.
     * Un middleware est une sorte de règle vérifiant une condition.
     * Si la condition n'est pas vérifiée, on peut être redirigé ailleurs par exemple.
     *
     * Pour mieux comprendre, se référer à la documentation: https://laravel.com/docs/5.4/middleware
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the basic EDT.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = \Auth::user()->activities;
        return view('edt', compact('activities')); // redirige à la vue
    }

    /**
     * @param Request $request
     *
     * https://laravel.com/docs/5.4/requests
     * https://laravel.com/docs/5.4/responses
     */
    public function create(Request $request)
    {

    }

    /**
     * @param Request $request
     */
    public function update(Request $request)
    {

    }

    /**
     * @param Request $request
     */
    public function delete(Request $request)
    {

    }
}