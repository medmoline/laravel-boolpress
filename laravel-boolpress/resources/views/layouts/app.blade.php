@include('layouts.partials._head')

  @include('layouts.partials._admin_navbar')
  <main class="py-4">
      @yield('content')
  </main>
  @include('layouts.partials._footer')
