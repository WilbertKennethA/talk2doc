{{-- partials navbar --}}

<body>
  {{-- css --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  {{-- script --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <nav class="navbar navbar-expand-lg bg-white">
      <div class="container-fluid">
  
        <a href="{{route('home')}}">
          <img src="/assets/Talk2Doc.svg" alt="" class="p-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item {{request()->routeIs('home')? 'active': ''}}">
                <a class="nav-link ms-5" href="{{route('home')}}">Home</a>
              </li>
              <li class="nav-item {{request()->routeIs('appointment')? 'active': ''}}">
                <a class="nav-link ms-5 " href="{{route('appointment')}}">Doctors</a>
              </li>
              <li class="nav-item {{request()->routeIs('history')? 'active': ''}}">
                <a class="nav-link ms-5 " href="{{route('history')}}">History</a>
              </li>
              <li class="nav-item {{request()->routeIs('pharmacy')? 'active': ''}}">
                <a class="nav-link ms-5 " href="{{route('pharmacy')}}">Pharmacy</a>
              </li>
            </ul>
            @auth
            <div class="d-flex">
              <!-- User is authenticated -->
              <form method="GET" action="{{ route('profile.edit') }}">
                  <button type="submit" class="btn btn-outline-primary">Profile</button>
              </form>
              <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="btn btn-outline-danger ms-2" onclick="event.preventDefault(); this.closest('form').submit();">Logout</button>
              </form>
          </div>
            @else
            <div class="d-flex">
              <!-- User is not authenticated -->
              <form method="GET" action="{{ route('login') }}">
                  <button type="submit" class="btn btn-outline-success">
                    <strong>Login</strong>
                  </button>
              </form>
              <form method="GET" action="{{ route('register') }}">
                  <button type="submit" class="btn btn-outline-success ms-2">
                    <strong>Register</strong>
                  </button>
              </form>
            </div>
            @endauth
        </div>
      </div>
    </nav>
</body>