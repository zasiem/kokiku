<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = "comments";

    public function recipes(){
      return $this->belongsTo('App\Recipes', 'recipes_id', 'id');
    }

    public function users(){
      return $this->belongsTo('App\User', 'users_id', 'id');
    }

}
