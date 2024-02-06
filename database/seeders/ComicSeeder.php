<?php

namespace Database\Seeders;

use App\Models\Comic;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i<100; $i++){
            $comics = new Comic();
            $comics->title = $faker->words(2, true);
            $comics->description = $faker->text(200);
            $comics->thumb = "https://via.placeholder.com/300/" . $faker->numberBetween(1, 1000);
            $comics->price = $faker->randomFloat(2, 0, 999);
            $comics->series = $faker->words(2, true);
            $comics->sale_date = $faker->date();
            $comics->type = $faker->words(2, true);
            $comics->save();
        } 
    }
}
