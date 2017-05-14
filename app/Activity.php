<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function task()
    {
        return $this->belongsTo('App\Models\Task');
    }

    public function room()
    {
        return $this->belongsTo('App\Models\Room');
    }
}
