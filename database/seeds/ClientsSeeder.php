<?php

use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('es_ES');
        
        for ($i=0; $i < 50; $i++){
        
         DB::table('clients')->insert([
            'name'   => $faker->firstName,
            'lastName' => $faker->lastName." ".$faker->lastName,
            'identification' => $faker->PhoneNumber,
            'type' => $faker->randomElement(['1','2']),
            'state'  => $faker->unique()->email,
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            'password' => \Hash::make(12345),
            ]);
    }
}
