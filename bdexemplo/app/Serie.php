<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class serie extends Model
{
    public function users()
    {
        return $this->belongsTo('App\User');
    }

}
