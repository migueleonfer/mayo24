<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Persona;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
	  $faker = Faker::create();
	  $cantidad = Persona::All()->count();
	  for ($i=1; $i < 10; $i++)
	   { 
	        $ape = $faker->firstName;  // Puedo aplicar directo al mail
	        $nom = $faker->lastName;
		   	 User::create([   	  
	        'usr_idper'      => $i;//$faker->numberBetween(1,$cantidad),
	        'name'           => $nom.'.'.$ape,
	        'email'          => $nom.'.'.$ape.'@ant.gob.ec',
	        'password'       => $nom,
	        'per_estado'     => 'Vigente',
	        'per_digitador'  => 'Miguelon'
		]);        
      }        
    }
}
                   