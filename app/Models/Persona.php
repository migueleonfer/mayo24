<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
   	protected $table = 'personas';

	protected $primaryKey = 'idper';

	protected $fillable = array(
        'per_idorg',
        'per_cedula',
        'per_apellidos',
        'per_nombres',
        'per_titulo',
        'per_mail',
        'per_telefono',
        'per_celular',
        'per_estado',
        'per_digitador',
	);
	protected $hidden = ['idper','created_at','updated_at'];    

	public function organicos() 
	{
		return $this->belongsTo('App\Models\Organico');
	}


}
