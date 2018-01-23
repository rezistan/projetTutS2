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

    protected $fillable = [
       'user_id', 'activity_id',
    ];
    protected $table = 'activity_groups';
    
    public $timestamps = false;
}
