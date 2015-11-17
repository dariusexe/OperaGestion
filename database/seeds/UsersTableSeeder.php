<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{


	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        
        DB::table('users')->insert([
            'name'   => 'Darío',
            'lastName' => 'Vallejo Carrasco',
            'tlf' => '655447312',
            'role' => '7',
            'email'  => 'darioinfor@gmail.com',
            'password' => \Hash::make('nesi7yqyw3494')]);

        
        $faker = Faker\Factory::create('es_ES');
        
        for ($i=0; $i < 50; $i++){
        
         DB::table('users')->insert([
            'name'   => $faker->firstName,
            'lastName' => $faker->lastName." ".$faker->lastName,
            'tlf' => $faker->PhoneNumber,
            'role' => $faker->randomElement(['1','2','3','4','5','6','7']),
            'email'  => $faker->unique()->email,
            'password' => \Hash::make(12345),
            ]);
            
        }
    }

}