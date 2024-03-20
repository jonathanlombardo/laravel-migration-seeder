@extends('layouts.main')


@section('maincontent')
<div class="container text-center">
  <h1 class="mt-5 mb-3">TRAIN LIST</h1>
  <div class="mt-3 mb-5">
    <a class="me-3" href="{{route("train.index", "today")}}">Show only today</a>
    <a href="{{route("train.index")}}">Show All</a>
  </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#code</th>
      <th scope="col">Company</th>
      <th scope="col">Departure Station</th>
      <th scope="col">Arrival Station</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Arrival Time</th>
      <th scope="col">Wagons</th>
      <th scope="col">On Time</th>
      <th scope="col">Cancelled</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($trains as $train)
      <tr>

        <th scope="row">{{$train->code}}</th>
        <td>{{$train->company}}</td>
        <td>{{$train->station_from}}</td>
        <td>{{$train->station_to}}</td>
        <td>{{$train->getDepDateTime()}}</td>
        <td>{{$train->getArrDateTime()}}</td>
        <td>{{$train->wagons}}</td>
        <td>{{$train->on_time}}</td>
        <td>{{$train->cancelled}}</td>
      </tr>

    @empty

    <tr>
      <td colspan="100%">No Trains</td>
    </tr>

    @endforelse


    
  </tbody>
</table>
</div>
@endsection