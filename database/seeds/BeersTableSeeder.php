<?php

use Illuminate\Database\Seeder;

use App\Models\Beer;
use Faker\Generator as Faker;

class BeersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newBeer = new Beer();
            
                $newBeer->nome = $faker->word();
                $newBeer->formato_cl = $faker->numberBetween(33, 66);
                $newBeer->stile = $faker->word();
                $newBeer->prezzo = $faker->randomFloat(2, 2, 20);
                $newBeer->provenienza = $faker->state();
                $newBeer->gradazione = $faker->randomFloat(1, 4, 20);


                $newBeer -> save();

        }
    }
}
