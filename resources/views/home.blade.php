@extends('layouts.main')


@section('maincontent')
<div class="container text-center">
  <h1 class="my-5">HOME</h1>
  <a href="{{route('train.index')}}" class="btn btn-primary">Go to Train</a>
</div>
@endsection