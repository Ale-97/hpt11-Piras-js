<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img height="38" src="{{ asset('logo.svg')}}" alt="{{ config('app.name') }}"> {{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-0 mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('articles.index') }}">Articoli</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{ route('anime.genres') }}">Anime</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('whoIAm') }}">Chi siamo</a>
          </li>
        </ul>
        @auth
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="#">Profilo</a></li>
                <li><a class="dropdown-item" href="{{ route('articles.index') }}">Articoli</a></li>
                <li><a class="dropdown-item" href="{{ route('updatePassword') }}">Reset Password</a></li>
                <li><a class="dropdown-item" href="{{route('categories.create')}}">edita categorie</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Esci</button>
                  </form>
                </li>
              </ul>
            </li>
          </ul>
          @endauth
          @guest
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/login">Accedi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Registrati</a>
          </li>

          </ul>
          @endguest
      </div>
    </div>
</nav>