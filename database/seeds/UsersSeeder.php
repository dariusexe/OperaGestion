<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Usuario',
            'lastName' => 'Prueba',
            'phone' => '123456789',
            'email' => 'prueba@prueba.com',
            'password' => \Hash::make('12345')]);


        $faker = Faker\Factory::create('es_ES');

        for ($i = 0; $i < 50; $i++) {

            DB::table('users')->insert([
                'name' => $faker->firstName,
                'lastName' => $faker->lastName . " " . $faker->lastName,
                'phone' => $faker->PhoneNumber,
                'identification' => $faker->bothify('#########?'),
                'country' => $faker->community,
                'city' => $faker->city,
                'address' => $faker->address,
                'PC' => $faker->postcode,
                'IBAN' => $faker->iban('ES'),
                'email' => $faker->unique()->email,
                'password' => \Hash::make(12345),
            ]);

        }
    }
}
