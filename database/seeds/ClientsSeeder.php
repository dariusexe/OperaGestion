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

        for ($i = 0; $i < 50; $i++) {

            DB::table('clients')->insert([
                'name' => $faker->firstName,
                'lastName' => $faker->lastName . " " . $faker->lastName,
                'identification' => $faker->bothify('#########?'),
                'type' => $faker->randomElement(['1', '2']),
                'country' => $faker->community,
                'city' => $faker->city,
                'address' => $faker->address,
                'PC' => $faker->postcode,
                'IBAN' => $faker->iban('ES'),
                'email' => $faker->unique()->email,
                'phone' => $faker->PhoneNumber,
                'contactPerson' => $faker->firstName,
                'contactPhone' => $faker->PhoneNumber,
                'legalPartner' => $faker->firstName,
                'CIFLegalPartner' => $faker->bothify('#########?'),
                'comentary' => "",
                'idUser' => $faker->NumberBetween($min = 0, $max = 50),
                'otherContracts' => "",
            ]);
        }
    }
}
