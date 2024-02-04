<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" style="margin-left: 200px;" href="/redirect">Laravel</a>
          </li>
         
    
        </ul>
        <div class="d-flex" style="margin-right: 200px;">
            @if (Route::has('login'))
                @auth

                <a class="nav-link active" aria-current="page" href="{{ route('logoutt') }}">Logout</a>
                @else
                <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Signup</a>

                @endauth
                @endif
        </div>
      </div>
    </div>
  </nav>
