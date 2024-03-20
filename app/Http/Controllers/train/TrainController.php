<?php

namespace App\Http\Controllers\train;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
  public function index()
  {
    $trains = Train::all();
    dd($trains);
    return view("train.index");
  }
}
