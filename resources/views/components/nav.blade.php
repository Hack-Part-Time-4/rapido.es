

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <a class="navbar-brand" 
          href="">Rapido.es</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" 
                      href="">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#"> Quiénes somos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#"> Ubicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> ¡Sube tu anuncio!</a>
                </li>
                  
              </ul>
              <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </div>
      </div>

      @guest
      @if (Route::has('login'))
      <li class="nav-item otraclase">
          <a class="nav-link" href="{{route('login')}}"> <span> Entrar </span>
          </a>
      </li>
      @endif

      @if (Route::has('register'))
      <li class="nav-item otraclase">
          <a class="nav-link" href="{{route('register')}}">
              <span> Registrar </span>
          </a>
      </li>
      @endif

      @else
      <li class="nav-item">
          <form id="logoutForm" action="{{route('logout')}}" method="POST">
              @csrf
          </form>

          <a id="logoutBtn" class="nav-link" href="#"> Salir
          </a>

      </li>

      @endguest
  </nav>
