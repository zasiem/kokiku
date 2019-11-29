<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipes extends Model
{
    protected $table = 'recipes';

    public function bahan(){
      return $this->hasMany('App\Bahan', 'recipes_id', 'id');
    }

    public function alat(){
      return $this->hasMany('App\Alat', 'recipes_id', 'id');
    }

    public function tutorial(){
      return $this->hasMany('App\Tutorial', 'recipes_id', 'id');
    }

}
