<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeederCsv extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $file = fopen(__DIR__ . "/CSV/trainSeeder.csv", "r");
    $keys = fgetcsv($file);

    while (!feof($file)) {
      $train_datas = fgetcsv($file);

      $train = new Train;

      foreach ($keys as $index => $key) {
        $train->$key = $train_datas[$index];
      }

      $train->save();
    }

    fclose($file);
  }
}
