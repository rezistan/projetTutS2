<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
