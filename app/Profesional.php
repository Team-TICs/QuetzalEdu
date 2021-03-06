<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
{
	protected $table = 'profesional';

	protected $fillable = ['nivel', 'especialidad', 'experiencia', 'persona_id'];

    public function persona(){
    	return $this->belongsTo('App\Persona');
    }
}
