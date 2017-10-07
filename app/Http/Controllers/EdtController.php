<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Activity;
use Carbon\Carbon;

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

    private $user_activities;
    private $nb_col;
    private $nb_row;


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
        $this->nb_row = 10;
        $this->nb_col = 6;
    }

    /**
     * Show the basic EDT.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->user_activities = \Auth::user()->activities;
        //$this->user_activities = $activities->groupBy();
        $planning = $this->getPlanning();
        return view('edt', compact('planning')); // redirige à la vue
    }

    /**
     * Le but sera de préconstruire le planning ici. Recherche de solutions techniques ?
     * @return string
     */
    public function getPlanning()
    {
        $planning = '<table class="ui center aligned unstackable celled compact definition table">';
        $planning .= '<thead><tr><th></th><th>Lundi</th><th>Mardi</th><th>Mercredi</th><th>Jeudi</th><th>Vendredi</th></tr></thead>';

        $planning .= '<tbody>';

        for ($rows = 0; $rows < $this->nb_row; $rows++) {
            $planning .= '<tr>';
            for ($columns = 0; $columns < $this->nb_col; $columns++) {
                $planning.= '<td></td>';
            }
            $planning .= '</tr>';
        }

        $planning .= '</tbody>';
        $planning .= '</table>';

        foreach($this->user_activities as $activity) {
            $activity->carbonize();
        }
        return $planning;
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