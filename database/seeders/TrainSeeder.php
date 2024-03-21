<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $train = new Train();
    $train->company = "Company";
    $train->station_from = "Garbagnate";
    $train->station_to = "Centrale";
    $train->departure_date = "2023-03-24";
    $train->departure_time = "10:00:00";
    $train->arrival_date = "2023-03-24";
    $train->arrival_time = "15:00:00";
    // $train->code = "";
    $train->wagons = "12";
    $train->on_time = "1";
    $train->cancelled = "0";
    $train->save();

  }
}
