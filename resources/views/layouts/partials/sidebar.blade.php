<style>
  li a{
    font-size: 1.2rem;
  }
</style>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    @if(auth()->user()->roles == 'admin')
      @include('layouts.partials.sidebar_menu.side_admin')
    @endif

    @if(auth()->user()->roles == 'masyarakat')
      @include('layouts.partials.sidebar_menu.side_masyarakat')
    @endif
  </ul>
</nav>