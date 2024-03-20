<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
  // use HasFactory;

  private function formatDate($date)
  {
    $date = str_replace('/', '-', $date);
    $date = date('d/m', strtotime($date));
    return $date;
  }

  private function formatTime($time)
  {
    $time = date("H:i", strtotime($time));
    return $time;
  }
  public function getDepDateTime()
  {
    $date = $this->formatDate($this->departure_date);
    $time = $this->formatTime($this->departure_time);

    return "[ $date ] $time";
  }

  public function getArrDateTime()
  {
    $dep_date = $this->formatDate($this->departure_date);
    $arr_date = $this->formatDate($this->arrival_date);
    $arr_time = $this->formatTime($this->arrival_time);

    if ($dep_date != $arr_date) {
      return "[ $arr_date ] $arr_time";
    } else {
      return $arr_time;
    }
  }
}
