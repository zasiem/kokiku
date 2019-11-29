<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alat extends Model
{
    protected $table = 'alat';

    public function recipes(){
      return $this->belongsTo('App\Recipes', 'recipes_id', 'id');
    }
}
