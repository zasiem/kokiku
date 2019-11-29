<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
  protected $table = 'Bahan';

  public function recipes(){
    return $this->belongsTo('App\Recipes', 'recipes_id', 'id');
  }
}
