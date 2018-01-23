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
        $this->begin = Carbon::createFromFormat('H:i', $this->started_at);
        $this->end = Carbon::createFromFormat('H:i', $this->ended_at);
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

    protected $fillable = [
       'task_id', 'room_id', 'day', 'week', 'year','started_at','ended_at',
    ];
    protected $table = 'activities';
    
    public $timestamps = false;
}
