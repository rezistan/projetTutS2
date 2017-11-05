<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Modèle représentant un utilisateur.
     * Pour créer un modèle : php artisan make:model
     * On peut ajouter l'attribut -m si l'on souhaite créer une migration (voir database/migrations)
     */

    /**
     * Lorsque l'on créé un nouvel utilisateur, pour aller plus vite on peut rentrer ces paramètres dans un tableau,
     * au lieu de tous les configurer un à un.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password', 'job_id'
    ];

    /**
     * Le contraire de $fillable. Normalement, les colonnes non assignables à la création sont automatiquement cachées
     * ($hidden) et inversement. Pour l'exemple Laravel a instancié les deux variables.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * Description des relations dans la base de données.
     * Comme dans la plupart des frameworks PHP, Laravel possède son ORM (mapping object-relationnel), nommé Eloquent.
     * Un ORM permet de faire correspondre des données relationnelles (table d'une base de données) à un objet (modèle).
     *
     * Nous respecterons la convention suivante :
     * - nom de fonction au singulier si le retour est unique (ex: job, un utilisateur n'a qu'un seul job),
     * pluriel sinon (ex: unavailabilities, un utilisateur peut avoir plusieurs absences).
     *
     * Comment modéliser les relations ?
     * - hasMany => décrit une relation de 1 à N (ex: User->hasMany->UserUnavailability).
     * - belongsTo => complément de hasMany (ex: UserUnavailability->belongsTo->User).
     * Peut également décrire une relation de 1 à 1.
     * - belongsToMany => décrit une relation de N à N, autour d'une table faisant office de pivot.
     * (ex: User->belongsToMany->Activity & Activity->belongsToMany->User). Attention, bien penser à indiquer la table pivot et non pas le modèle!
     *
     * Pour mieux comprendre, se référer à la documentation: https://laravel.com/docs/5.4/eloquent
     */

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job()
    {
        return $this->belongsTo('App\Job');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function activities()
    {
        return $this->belongsToMany('App\Activity', 'activity_groups')->orderBy('started_at');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function unavailabilities()
    {
        return $this->hasMany('App\UserUnavailability');
    }
}
