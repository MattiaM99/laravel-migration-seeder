<?php

use App\Offer;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i<10; $i++) {
          $newOffer = new Offer();
          $newOffer->where = $faker->text(20);
          $newOffer->duration = $faker->randomNumber(2);
          $newOffer->price = $faker->randomFloat(2, 1, 999);
          $newOffer->when = $faker->date();
          $newOffer->save();
        }
    }
}