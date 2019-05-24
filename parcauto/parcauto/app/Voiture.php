<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
	protected $primaryKey = 'id_voiture';

    protected $fillable=['id_voiture','matricule','carte_grise','numero_chasse','id_modelle','id_modelle','type_contrat','nbr_place','nbr_cheveaux','type_vitesse',
	
	'type_vitesse','id_carburent','photo_voiture','valeur','nbr_porte'];
    
    public function modelle(){
        return $this->belongsTo('App\Modelle');
    }

    public function fournisseur(){
        return $this->belongsTo('App\Fournisseur');
    }

    public function agences(){
        return $this->hasMany('App\agence');
    }
}