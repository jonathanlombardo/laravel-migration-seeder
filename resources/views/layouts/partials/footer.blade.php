<footer class="py-3 bg-dark text-white">
  <div class="container d-flex justify-content-between">

    <nav>
      <ul class="">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('train.index')}}">Train</a></li>
      </ul>
    </nav>
    <span>{{env('APP_NAME')}} footer</span>
  </div>
</footer>