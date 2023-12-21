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
        for ($i=0; $i < 10; $i++) { 
            # code...
            $newTrain = new Train ();
            $newTrain ->;
            $newTrain ->;
            $newTrain ->;
            $newTrain ->;
            $newTrain ->;
            $newTrain ->;
        }
        //
    }
}
