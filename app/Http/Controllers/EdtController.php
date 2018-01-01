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

    private $previous_year;
    private $current_year;
    private $next_year;

    private $previous_week;
    private $current_week;
    private $next_week;

    const NB_COLONNE = 6;
    const NB_HORAIRE = 10;
    const LASTWEEK = 52;
    const FIRSTWEEK = 1;


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
     * @param $year
     * @param $week
     * @return \Illuminate\Http\Response
     */
    public function index($year = -1, $week = 0)
    {
        if(!isset($year) || !is_numeric($year) || $year < 0) {
            $year = date("Y");
        }
        if(!isset($week) || !is_numeric($week) || $week < self::FIRSTWEEK || $week > self::LASTWEEK) {
            $week = date("W");
        }

        $this->current_year = $year;
        $this->current_week = $week;

        $this->setNextPrev();

        /*$dt = Carbon::now();
        $dt->year = $year;
        $dt->weekOfYear = $week;
        $this->user_activities = \Auth::user()->activities->whereBetween('starded_at', [Carbon::, Carbon::]);*/
        $this->user_activities = \Auth::user()->activities;
        foreach($this->user_activities as $activity) {
            $activity->carbonize();
        }
        $planning = $this->getPlanning();
        return view('edt', compact('planning')); // redirige à la vue
    }

    /**
     * Il s'agit d'avoir les bonnes dates lorsque l'on clique sur les semaines suivantes et précédentes
     */
    private function setNextPrev() {
        $this->previous_week = $this->current_week - self::FIRSTWEEK;
        $this->previous_year = $this->current_year;
        $this->next_week = $this->current_week + self::FIRSTWEEK;
        $this->next_year = $this->current_year;

        if($this->current_week == self::FIRSTWEEK) {
            $this->previous_week += self::LASTWEEK;
            $this->previous_year -= self::FIRSTWEEK;
        } else if($this->current_week == self::LASTWEEK) {
            $this->next_week -= self::LASTWEEK;
            $this->next_year += self::FIRSTWEEK;
        }
    }

    /**
     * Le but sera de préconstruire le planning ici. Recherche de solutions techniques ?
     * @return string
     */
    public function getPlanning()
    {
        $planning = '<div id="agenda">';
        /*$planning .= '<div class="day h-1">Horaires</div>
                      <div class="day h-1">Lundi</div>
                      <div class="day h-1">Mardi</div>
                      <div class="day h-1">Mercredi</div>
                      <div class="day h-1">Jeudi</div>
                      <div class="day h-1">Vendredi</div>';*/

        //$lastrow = -1;
        $planning .= '<div class="day h-1">Horaires';
        for($row = 0; $row < self::NB_HORAIRE; $row++) {
            $horaire = $row+8;
            $planning .= '<div class="day h-1">'.$horaire.'h</div>';
        }
        /*for($row = 0; $row < self::NB_HORAIRE; $row++) {

        }*/
        /*while($col < self::NB_COLONNE) {
                if($row > $lastrow) {
                    $planning .= '<div class="day h-1">'.$horaire.'h</div>';
                    $lastrow = $row;
                } else {
                    $found = false;
                    foreach($this->user_activities as $activity) {
                        if($activity->getDay() === $col && $activity->getBeginHour() === $horaire) {
                            $diff = $activity->getEndHour() - $horaire;
                            $planning .= '<div class="day h-'.$diff.'"><a class="fluid ui simple dropdown '.$activity->task->color.' button">
                                          <p class="services">'.$activity->task->task.'</p>
                                          <p>'.$activity->users->implode('firstname', ', ').'</p>
                                          <p>'.$activity->room->room.'</p>
                                          <div class="menu">
                                              <div class="item"><i class="edit icon"></i> Modifier</div>
                                              <div class="item"><i class="delete icon"></i> Supprimer</div>
                                              <div class="item"><i class="hide icon"></i> Cacher</div>
                                          </div>
                                       </a></div>';
                            $found = true;
                        }
                    }
                    if(!$found) $planning .= '<div class="day h-1">rien</div>';
                }
                $col++;
            }*/

        $planning .= '</div>';

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