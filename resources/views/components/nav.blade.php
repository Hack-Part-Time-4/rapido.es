<nav class="navbar navbar-expand-lg bg-navbar">
    <div class="container-fluid navbarWidth">
      <div class="d-flex justify-content-center">
        <a class="navbar-brand affiliate" 
        href="{{route ('inicio')}}">Affiliate.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
      </div>
        <div class="container-fluid collapse navbar-collapse ms-2" id="navbarSupportedContent">
          <div class="d-flex justify-content-end w-100">
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item linkWidth letra">
                  <a class="nav-link text-dark texto letra border-newAd" href="{{route ('ads.create')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square me-1" viewBox="0 0 16 16">
                      <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                      <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                    </svg>{{__('¡Sube tu anuncio!')}}</a>
                
              </li>              
              
              @guest
              @if (Route::has('login'))
              <li class="nav-item">
                  <a class="nav-link text-dark texto letra ms-1" href="{{route('login')}}"> {{__('Iniciar sesión')}}
                  </a>
              </li>
              @endif
          
              @if (Route::has('register'))
             
              @endif
          
              @else
              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark letra texto tex-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @if (Auth::user()->is_revisor)
              <li>
                <a class="dropdown-item" href="{{ route('revisor.home') }}">
                  Revisor
                  <span class="badge rounded-pill bg-danger">
                    {{\App\Models\Ad::ToBeRevisionedCount()}}
                  </span>
                </a>
              </li>
              @endif
              <li>
                <form>
                <a  class="dropdown-item" href="{{route('dashboard')}}">{{__('Mi perfil')}}</a>
                </form>
              </li>
              <li>
                <form id="logoutForm" action="{{route('logout')}}" method="POST">
                  @csrf
                </form>
                <a id="logoutBtn" class="dropdown-item" href="#">{{__('Salir')}}</a>
              </li>
            </ul>
          </li>
             @endguest
             <li class='nav-item d-flex align-items-center'>
              <x-locale lang="en" country="gb" />
             </li>
          
             <li class='nav-item d-flex align-items-center'>
             <x-locale lang="it" country="it" />
             </li>
          
             <li class='nav-item d-flex align-items-center'>
             <x-locale lang="es" country="es" />
             </li>
                
            </ul>
          </div>
                   
        </div>
        
    </div>
</nav>