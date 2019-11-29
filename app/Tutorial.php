<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
  protected $table = 'tutorial';

  public function recipes(){
    return $this->belongsTo('App\Recipes', 'recipes_id', 'id');
  }
}
