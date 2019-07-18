<div id="app">
  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
      <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name')}}
      </a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')}}">
              Home
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Chi Siamo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              Contatti
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{route('admin.home')}}">
              Admin
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
</div>
