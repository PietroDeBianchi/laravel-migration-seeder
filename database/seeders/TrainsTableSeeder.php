<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use App\Functions\Helpers;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0) {
                $trains = new Train();

                $trains->company = $row[0];
                $trains->departure_station = $row[1];
                $trains->arrival_station  = $row[2];
                $trains->departure_time  = $row[3];
                $trains->arrival_time  = $row[4];
                $trains->train_code  = $row[5];
                $trains->wagons_number  = $row[6];
                $trains->on_time = $row[7];
                $trains->cancelled = $row[8];

                $trains->save();
            }
        }
    }
}
