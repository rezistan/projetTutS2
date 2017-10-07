<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Activity extends Model
{

    public function users()
    {
        return $this->belongsToMany('App\User', 'activity_groups');
    }

    public function task()
    {
        return $this->belongsTo('App\Task');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function carbonize()
    {
        $this->begin = Carbon::createFromFormat('Y-m-d H:i:s', $this->started_at);
        $this->end = Carbon::createFromFormat('Y-m-d H:i:s', $this->ended_at);
    }

    /**
     * jour de l'activité
     */
    public function getDay() {
        return $this->begin->dayOfWeek;
    }

    /**
     * heure de début de l'activité
     */
    public function getBeginHour() {
        return $this->begin->hour;
    }

    /**
     * heure de fin de l'activité
     */
    public function getEndHour() {
        return $this->end->hour;
    }
}
