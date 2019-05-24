<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    

    public function voitures(){
        return $this->hasMany('App\Voiture');
    }

    public function assurence(){
        return $this->hasMany('App\Assurence');
    }
}
