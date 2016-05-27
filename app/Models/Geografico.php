<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Geografico extends Model
{
	protected $table = 'geograficos';

	protected $primaryKey = 'idgeo';

	protected $fillable = array(
	   'geo_nombre', 'geo_abrevia', 'geo_letras',
	   'geo_pais', 'geo_region', 'geo_provincia', 'geo_canton',
	   'geo_sector', 'geo_parroquia', 'geo_natural', 'geo_politica',
	   'geo_estado', 'geo_digitador');

	protected $hidden = ['idgeo','created_at','updated_at'];

	public function organicos() 
	{
		return $this->hasMany('App\Models\Organico');
	}    	
}
