<?php

use Illuminate\Database\Seeder;
use App\Models\Geografico;
use Faker\Factory as Faker;
class GeograficosTableSeeder extends Seeder
{
    public function run()
    {
		$faker = Faker::create();

		for ($i=0; $i < 5000; $i++)
		{
			Geografico::create
			([
				  'geo_nombre' 		=> $faker->word(),
				  'geo_abrevia' 	=> $faker->word(),				
				  'geo_pais' 		=> 593,
				  'geo_letras' 		=> substr($faker->word(),1,4),
				  'geo_region' 		=> $faker->numberBetween(1,2),
				  'geo_provincia' 	=> $faker->numberBetween(1,2),
				  'geo_canton' 		=> $faker->numberBetween(1,2),
				  'geo_parroquia' 	=> $faker->numberBetween(1,2),
				  'geo_sector' 		=> $faker->numberBetween(1,2),
				  'geo_natural' 	=> $faker->randomElement(['Sierra','Costa']),
				  'geo_politica' 	=> $faker->randomElement(['Sierra','Costa','Amazonas','Insular']),
				  'geo_estado' 			=> 'Vigente',
				  'geo_digitador'  	    => 'Miguelon'
		   ]);
		}		
    }
}
