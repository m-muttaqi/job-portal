<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public function rtu()
    {
    	return $this->hasOne('App\User', 'id', 'user_id');
    }
}
