<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

use App\Models\Train;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0;$i<20; $i++){

            $train = new Train();
            $train->azienda = $faker->company(30);
            $train->stazione_partenza = $faker->city(50);
            $train->stazione_arrivo = $faker->city(50);
            $train->data_partenza = $faker->date('Y:m:d');
            $train->data_arrivo = $faker->date('Y:m:d');
            $train->orario_partenza = $faker->time('h:i:s');
            $train->orario_arrivo = $faker->time('h:i:s');
            $train->codice_treno = $faker->numberBetween(1000, 99999);
            $train->n_carrozze = $faker->numberBetween(4, 9);
            $train->in_orario = $faker->boolean();
            $train->tempo_ritardo = $faker->time('i:s');
            $train->cancellato = $faker->boolean();

            $train->save();
        }
    }
}
