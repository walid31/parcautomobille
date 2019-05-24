<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelle extends Model
{  protected $primaryKey = 'id_modelle';

    protected $fillable=['id_modelle','name_modelle','id_marque','id_categorie'];
   

    public function voitures(){
        return $this->hasMany('App\Voiture');
    }

    public function categorie(){
        return $this->belongsTo('App\Categorie');
    }

    public function marque(){
        return $this->belongsTo('App\Marque');
    }

    public function carburent(){
        return $this->belongsTo('App\Carburent');
    }
}
