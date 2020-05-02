<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class post extends Model
{
  public function user()
  {
      return $this->hasOne('App\User','_id','user_id');
  }
}
