<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

    public function activities()
    {
        return $this->hasMany('App\Models\Activity');
    }
}
