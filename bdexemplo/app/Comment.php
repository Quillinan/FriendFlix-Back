<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Serie;

class Comment extends Model
{
  public function users()
  {
      return $this->belongsTo('App\User');
  }
  public function series()
  {
      return $this->belongsTo('App\Serie');
  }
    //
}
