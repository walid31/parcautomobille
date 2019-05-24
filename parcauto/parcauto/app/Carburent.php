<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carburent extends Model
{
	protected $primaryKey = 'id_carburent';

    protected $fillable=['id_carburent','name_carburent'];
    
    public function modelles(){
        return $this->hasMany('App\Modelle');
    }
}
