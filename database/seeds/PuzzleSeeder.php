<?php

use Illuminate\Database\Seeder;
use App\Puzzle;
use Faker\Generator as Faker;
class PuzzleSeeder extends Seeder
{
    public function run(Faker $faker)
    {
        // $faker ->addProvider(new \Faker\Provider\it_IT\Person($faker));
        for ($i=1; $i <= 70; $i++) {
        $puzzleData = [
            'title'         =>  $faker->words(rand(1, 3), true),
            'pieces'        =>  $faker->numberBetween(0, 500),
            'image'         =>  'https://picsum.photos/id/' . rand(0, 1084) . '/640/480',
            'description'   =>  $faker->text(),
            'brand'         =>  $faker->words(rand(1, 3), true),
            'price'         =>  $faker->randomFloat(1, 5, 150),
            'available'     =>  $faker->boolean(),
            'quantity'      =>  $faker->numberBetween(0, 20),
            ];
    // METODO UNO PER SALVARE I DATI NEL DB
    //    $puzzle = new Puzzle();
    //    $puzzle->fill($puzzleData);
    //    $puzzle->save();
       Puzzle::create($puzzleData);
        }
    }
}
