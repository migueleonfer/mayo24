<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Organico;
use App\Models\Persona;
use Faker\Factory as Faker;
class PersonasTableSeeder extends Seeder
{
    public function run()
    {
	  $faker = Faker::create();
	  $cantidad = Organico::All()->count();
	  for ($i=1; $i < $cantidad; $i++)
	   { 
        $ape = $faker->firstName;  // Puedo aplicar directo al mail
        $nom = $faker->lastName;
	   	 Persona::create([   	  
        'per_idorg'      => $faker->numberBetween(1,$cantidad),
        'per_cedula'     => $faker->numberBetween(1,10),
        'per_apellidos'  => $ape,
        'per_nombres'    => $nom,
        'per_titulo'	 => $faker->lastName,
        'per_mail'       => strtolower($ape. '.' . $nom . '@' . $faker->safeEmailDomain),
        'per_telefono'   => $faker->numberBetween(1,9),
        'per_celular'    => $faker->numberBetween(1,10),
        'per_estado'     => 'Vigente',
        'per_digitador'  => 'Miguelon'
		]);        
      }
    }
}
