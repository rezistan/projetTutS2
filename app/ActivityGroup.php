<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityGroup extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function activity()
    {
        return $this->belongsTo('App\Activity');
    }
}
