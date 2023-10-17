<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $train = new train();

            $train->azienda = $faker->words(2, true);
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure_date = $faker->dateTimeBetween('now', '+1 week');
            $train->departure_time = $faker->time();
            $train->arrival_time = $faker->time();
            ;
            $train->train_code = $faker->numberBetween(1000, 10000);
            $train->arriving = $faker->numberBetween(0, 1);
            $train->cancelled = $faker->numberBetween(0, 1);
            $train->save();
        }
    }
}