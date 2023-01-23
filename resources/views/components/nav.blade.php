
  <nav class="navbar navbar-expand-lg  bg-navbar">
    <div class="container-fluid">
        <a class="navbar-brand affiliate" 
        href="{{route ('inicio')}}">Affiliate.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ms-2" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 w-100">
               
                        

              
              <li class="nav-item linkWidth caja letra">
                  <a class="nav-link text-dark texto" href="{{route ('ads.create')}}"> {{__('¡Sube tu anuncio!')}}</a>
              </li>
              
              
              @guest
              @if (Route::has('login'))
              <li class="nav-item texto letra">
                  <a class="nav-link text-dark" href="{{route('login')}}"> <span>{{__('Entrar')}} </span>
                  </a>
              </li>
              @endif
          
              @if (Route::has('register'))
              <li class="nav-item texto letra">
                  <a class="nav-link text-dark" href="{{route('register')}}">
                      <span> {{__('Registrar')}} </span>
                  </a>
              </li>
              @endif
          
              @else
              <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
             <li class='nav-item'>
              <x-locale lang="en" country="gb" />
             </li>
          
             <li class='nav-item'>
             <x-locale lang="it" country="it" />
             </li>
          
             <li class='nav-item'>
             <x-locale lang="es" country="es" />
             </li>
                
            </ul> 
                   
        </div>
        
    </div>

 

 
</nav>