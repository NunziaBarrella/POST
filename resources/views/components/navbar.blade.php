<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="{{route('homepage')}}">
      <img src="logo-aulab-hackademy-black (1).png" alt="Logo" height="30">
    </a>
    <a class="navbar-brand fw-bold" href="{{route ('homepage')}}">The Aulab Post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bold">
        <li class="nav-item">
          <a class="nav-link" href="{{route ('article.create')}}">Inserisci un articolo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('article.index')}}">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('carrers')}}">Lavora con noi</a>
        </li>
       @auth
       @if (Auth::user()->is_admin)
       <li class="nav-item">
          <a class="nav-link" href="{{route ('admin.dashboard')}}">Dashboard Admin</a>
        </li>
        @endif
        @if (Auth::user()->is_revisor)
       <li class="nav-item">
          <a class="nav-link" href="{{route ('revisor.dashboard')}}">Dashboard revisore</a>
        </li>
        @endif

       <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth:: user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li class="nav-item">
                <form action="{{route ('logout')}}" id="logout-form" method="POST">
                    @csrf

                    <button type="submit" class="btn nav-link">Logout</button>
                </form>
            </li>
          </ul>
        </li>
       @endauth
        @guest
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto ospite
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route ('register')}}">Registrati</a></li>
            <li><a class="dropdown-item" href="{{route ('login')}}">Accedi</a></li>

          </ul>
        </li>
        @endguest
    </ul>
    <form class="d-flex" method="GET" action="{{route ('article.search')}}" >
        <input class="form-control me-2" type="search" placeholder="Cosa stai cercando?" aria-label="Search" name="query">
        <button class="btn btn-outline-success" type="submit">Cerca</button>
      </form>
  </div>
</nav>
