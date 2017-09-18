<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand navlogo" href="@yield('brand')">Dhévak <small>Wiki</small></a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>
    <li class="form-inline my-2 my-lg-0">
      @if(Auth::check())
        <li id="dropdown" class="dropdown">
          <a  href="/" class="dropdown-toggle back" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hallo {{ Auth::user()->name }}</a>
          <ul class="dropdown-menu dropdownlist" id="admindropdown">
            <li role="presentation"><a href="{{ url('/') }}">Home</a></li>
            <li role="separator" class="divider"></li>
            <li role="presentation"><a href="{{ url('/admin') }}">Admin</a></li>
            <li role="separator" class="divider"></li>
            <li role="presentation"> <a href="{{ url('/category') }}">Nieuwe categorie</a></li>
            <li role="separator" class="divider"></li>
            <li role="presentation"><a href="{{ url('/register') }}">Registreren</a></li>
            <li role="separator" class="divider"></li>
            <li role="presentation">
              <a href="{{ url('/logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Uitloggen
              </a>
              <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </li>
        @else
          <a href="{{ url('/login') }}" class="btn btn-secondary btn-position">Inloggen</a>
        @endif
      </li>
  </div>
</nav>
