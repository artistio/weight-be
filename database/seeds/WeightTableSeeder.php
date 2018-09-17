<?php

use Illuminate\Database\Seeder;
use App\Weight;

class WeightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();

        // Create 50 dummy Weight
        for ($i = 0; $i < 50; $i++) {
            Weight::create([
                'weightDate' => date('Y-m-d', time()-($i * 86400)),
                'weightValue' => $faker->randomFloat(1, 70, 90)
            ]);
        }
    }
}
