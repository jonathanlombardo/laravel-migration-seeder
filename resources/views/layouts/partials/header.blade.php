<header class="py-3 bg-primary text-white">
  <div class="container d-flex justify-content-between align-items-center">

    <span>{{env('APP_NAME')}} Header</span>
    <nav>
      <ul class="d-flex align-items-center gap-3">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('train.index')}}">Train</a></li>
      </ul>
    </nav>
  </div>
</header>