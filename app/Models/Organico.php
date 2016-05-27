<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organico extends Model
{
   	protected $table = 'organicos';

	protected $primaryKey = 'idorg';

	protected $fillable = array(
        'org_idgeo',
        'org_nombre',
        'org_abrevia',
        'org_institucion',
        'org_ejecutivo',
        'org_subejecutivo',
        'org_coordinador',
        'org_director',
        'org_departamento',
        'org_seccion',
        'org_estado', 
        'org_digitador'
	);
	protected $hidden = ['idorg','created_at','updated_at'];

	public function personas() 
	{
		return $this->hasMany('App\Models\Persona');
	}  

	public function geograficos() 
	{
		return $this->belongsTo('App\Models\Geografico');
	}


}
  