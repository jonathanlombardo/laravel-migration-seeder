<?php

namespace App\Http\Controllers\train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
  public function index($today = null)
  {
    if ($today == "today") {
      $trains = Train::select("*")->whereRaw("departure_date = CURRENT_DATE()")->orderBy("departure_date")->get();
    } elseif (!$today) {
      $trains = Train::select("*")->orderBy("departure_date")->get();
    } else {
      return abort(404);
    }

    return view("train.index", compact("trains"));
  }
}
