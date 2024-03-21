<?php

namespace Database\Seeders;

use App\Models\Train;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    $existingCode = Train::whereRaw("code IS NOT NULL")->get()->pluck("code")->toArray();

    for ($i = 0; $i < 100; $i++) {

      $departDateObj = $faker->dateTimeBetween('-1 week', '+1 week');
      $departDate = date('Y-m-d', $departDateObj->getTimestamp());
      $departTime = date('H:i:s', $departDateObj->getTimestamp());

      $dt = Carbon::createFromFormat('Y-m-d H:i:s', "$departDate $departTime");

      $arrDateObj = $dt->addHours($faker->numberBetween(1, 48));
      $arrDate = date('Y-m-d', $arrDateObj->getTimestamp());
      $arrTime = date('H:i:s', $arrDateObj->getTimestamp());

      $train = new Train();

      $train->company = $faker->company();
      $train->station_from = "{$faker->city()} Station {$faker->randomDigitNotNull()}";
      $train->station_to = "{$faker->city()} Station {$faker->randomDigitNotNull()}";
      $train->departure_date = $departDate;
      $train->departure_time = $departTime;
      $train->arrival_date = $arrDate;
      $train->arrival_time = $arrTime;
      // $train->code = "";
      $train->wagons = $faker->numberBetween(5, 30);
      $train->on_time = $faker->numberBetween(0, 1);
      $train->cancelled = $faker->numberBetween(0, 1);
      $train->save();
    }

  }
}
