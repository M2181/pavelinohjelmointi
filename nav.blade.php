<nav class="navbar navbar-expand-md navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{ url('/') }}">Verkkis</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('/') }}/kauppa">Kauppa<span class="sr-only">(current)</span></a>
      </li>
    @if (Auth::user() && Auth::user()->email == "Admin@kori.fi")
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}/create">Lisää tuote</a>
      </li>
        @endif
            @if (Auth::user() && Auth::user()->email == "Admin@kori.fi")
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}/editlist" >Muokkaa tuotteita</a>
          @endif
      </li>
    </ul>
      @auth
    <a href="{{ url('/') }}/kori" class="btn btn-primary">
  Ostoskori<span class="badge badge-light">9</span>
</a>
      @endauth
<div class="ml-md-3 ml-sm-0
 dropdown">
     @guest
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Kirjaudu
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

    <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
      <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
      @endguest
    @auth
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{ Auth::user()->name }}
  </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{ url('/') }}/check">omat tiedot</a>
    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
      @endauth
  </div>
</div>
  </div>
    </nav>