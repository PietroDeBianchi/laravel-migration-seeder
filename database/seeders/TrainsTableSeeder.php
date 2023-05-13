<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 16; $i++) {

            $train = new Train();

            $train->Company = $faker->word();
            $train->Date = $faker->date();
            $train->Departures_station = $faker->city();
            $train->Arrivals_station = $faker->city();
            $train->Departures_time = $faker->time("H:i");
            $train->Arrivals_time = $faker->time("H:i");
            $train->Train_code = $faker->bothify('??#####');
            $train->Price = $faker->randomNumber(2, false);
            $train->Wagon_numbers = $faker->numberBetween(1, 30);
            $train->Time_lag = $faker->boolean();
            $train->Deleted = $faker->boolean();

            $train->save();
        }
    }
}
