<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Models\Train;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for ($i = 0; $i < 100; $i++) {
            $newTrain = new Train();
            $newTrain->company = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrival_station = $faker->city();
            $newTrain->departure_date = $faker->dateTimeBetween('-1 week', '+1 week');
            $newTrain->departure_time = $faker->time();
            $newTrain->arrival_time = $faker->time();
            $newTrain->train_code = $faker->randomNumber(4, true);
            $newTrain->train_carriages = $faker->numberBetween(4, 12);
            $newTrain->is_on_time = $faker->numberBetween(0, 1);
            $newTrain->is_canceled = $faker->numberBetween(0, 1);
            // $newTrain->company = 'trenitalia2';
            // $newTrain->departure_station = 'torino';
            // $newTrain->arrival_station = 'firenze';
            // $newTrain->departure_date = '2023-03-14';
            // $newTrain->departure_time = '19:00:00';
            // $newTrain->arrival_time = '21:00:00';
            // $newTrain->train_code = 2827;
            // $newTrain->train_carriages = 5;
            // $newTrain->is_on_time = 0;
            // $newTrain->is_canceled = 0;
            // dd($newTrain);
            $newTrain->save();
        }

    }
}
