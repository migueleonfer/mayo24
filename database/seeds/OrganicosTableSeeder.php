<?php

use Illuminate\Database\Seeder;
use App\Models\Geografico;
use App\Models\Organico;
use Faker\Factory as Faker;
class OrganicosTableSeeder extends Seeder
{

    public function run()
    {
		// DB::table('organicos')->delete();
		$faker = Faker::create();
		$cantidad = Geografico::All()->count();
		for ($i=1; $i < $cantidad; $i++)
		{
			Organico::create
			([
				  'org_idgeo'  => $faker->numberBetween(2,$cantidad),
				  'org_nombre' 		 => $faker->state,
				  'org_abrevia' 	 => substr($faker->state,0,9),
				  'org_institucion'	 => 1,
				  'org_ejecutivo' 	 => 1,
				  'org_subejecutivo' => 1,
				  'org_coordinador'  => $faker->numberBetween(1,2),
				  'org_director' 	 => $faker->numberBetween(1,2),
				  'org_departamento' => $faker->numberBetween(1,2),
				  'org_seccion' 	 => $faker->numberBetween(1,2),		  
				  'org_estado' 		 => 'Vigente',
				  'org_digitador' 	 => 'Miguelon',
			]);
		}          
    }
}

