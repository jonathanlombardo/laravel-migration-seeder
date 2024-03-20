<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('trains', function (Blueprint $table) {
      $table->id();
      $table->string('company', 50);
      $table->string('station_from', 100);
      $table->string('station_to', 100);
      $table->date('departure_date');
      $table->time('departure_time');
      $table->date('arrival_date');
      $table->time('arrival_time');
      $table->char('code', 12)->unique('code')->nullable();
      $table->tinyInteger('wagons');
      $table->boolean('on_time')->default(true);
      $table->boolean('cancelled')->default(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('trains');
  }
};
