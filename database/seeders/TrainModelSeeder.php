<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for($i = 0; $i < 10; $i++){
            $new_train = new Train();
            $new_train->company = $faker->company();
            $new_train->departure_station = $faker->sentence(2);
            $new_train->arrival_station = $faker->sentence(2);
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->code = $faker->randomNumber(4, true);
            $new_train->coach_number = $faker->randomDigit();
            $new_train->on_time = $faker->numberBetween(0, 1);
            $new_train->cancelled = $faker->numberBetween(0, 1);
            $new_train->save();
        }
    }
}
