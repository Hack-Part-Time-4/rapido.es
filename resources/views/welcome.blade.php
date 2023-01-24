<x-layout>
    <x-slot name='title'>Affiliate - Homepage</x-slot>
    
    <!-- CARRUSEL DE PROMOCIONES -->
    <div class="container d-flex justify-content-center">
    <div id="carouselExampleIndicators " class="carousel slide mt-4 mb-2" data-bs-ride="carousel">
  <div class="carousel-indicators ">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{asset ('/images/coches.png')}}" class="w-100 image-modify" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset ('/images/sales.png')}}" class="w-100 image-modify" alt="...">
    </div>
    <div class="carousel-item">
      <img src="{{asset ('/images/televisores.jpg')}}" class="w-100 image-modify" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

<div class="my-5 d-flex justify-content-center text-center slogan titulo">
  <h2>{{__('¡Compra y vende productos de segunda mano')}} <br>
     {{__('desde dónde sea y cuándo quieras!')}}
    </h2>
</div>

{{-- second nav --}}
    <div class="container d-flex justify-content-center">
      <div class= "buscador search">
        <form action="{{route('search')}}" method="GET" class="d-flex" role="search">
          <input class="form-control search inputSearch" type="search" placeholder="{{__('Buscar')}}" aria-label="Search"> 
            <div>
                <i class="bi lupa bi-search d-flex justify-content-center pt-2" type="submit"></i>
            </div>
        </form> 
      </div>
    </div>
    <div class="container-fluid mt-5 d-flex justify-content-center">
        <h3 class="text-dark titulo letra" href="#" role="search" data-bs-toggle="dropdown" aria-expanded="false">{{__('Todas nuestras categorías')}} </h3>
    </div>
    <div class="container">
        <div class="row">
            <div class="text-dark d-flex justify-content-center" aria-labelledby="navbarDropdown">
            <!-- @foreach ($categories as $category)
              <li><a class="me-5" href="{{route('category.ads',$category)}}">{{__($category->name)}}</a></li>  
            @endforeach -->
                <a href="category/Coches/ads" class="category d-flex align-items-center">{{__('Coches')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-car-front-fill mt-2" viewBox="0 0 16 16">
                        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                    </svg>
                </a>
                <a href="category/Motos/ads" class="category d-flex align-items-center">{{__('Motos')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-bicycle mt-2" viewBox="0 0 16 16">
                        <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
                    </svg>
                </a>
                <a href="category/Hogar/ads" class="category d-flex align-items-center">{{__('Hogar')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-house-fill mt-2" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                    </svg>
                </a>
                <a href="category/Electrónica/ads" class="category d-flex align-items-center">{{__('Electrónica')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-cpu-fill mt-2" viewBox="0 0 16 16">
                        <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z"/>
                        <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z"/>
                    </svg>
                </a>
                <a href="category/Móviles/ads" class="category d-flex align-items-center">{{__('Móviles')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-phone-fill mt-2" viewBox="0 0 16 16">
                        <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0z"/>
                    </svg>
                </a>
                <a href="category/Ordenadores/ads" class="category d-flex align-items-center">{{__('Ordenadores')}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-pc-display mt-2" viewBox="0 0 16 16">
                        <path d="M8 1a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H9a1 1 0 0 1-1-1V1Zm1 13.5a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0Zm2 0a.5.5 0 1 0 1 0 .5.5 0 0 0-1 0ZM9.5 1a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5ZM9 3.5a.5.5 0 0 0 .5.5h5a.5.5 0 0 0 0-1h-5a.5.5 0 0 0-.5.5ZM1.5 2A1.5 1.5 0 0 0 0 3.5v7A1.5 1.5 0 0 0 1.5 12H6v2h-.5a.5.5 0 0 0 0 1H7v-4H1.5a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5H7V2H1.5Z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>


    <!-- CARDS DE ANUNCIOS -->
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h3 class="titulo my-5">{{__('Descubre los últimos anuncios')}}</h3>
            </div>
    </div>
    <div class="container">
        <div class="row">
        @forelse($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card animada mb-5 text-center" >
                    <img src="{{!$ad->images()->get()->isEmpty() ? Storage::url($ad->images()->first()->path) : 'https://picsum.photos/400/300'}}" class="card-img-top" alt="...">                    
                                        <div class="card-body">
                        <h5 class="card-title"> {{$ad->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}} €</h6>
                        <p class="card-text">{{$ad->body}}</p>
                        <div class="card-subtitle mb-2">
                            <strong><a class="category-tag" href="{{route('category.ads',$ad->category)}}">#{{$ad->category->name}}</a></strong>
                            <i>{{$ad->created_at->format('d/m/Y')}}</i>
                        </div>
                        <div class="card-subtitle mb-2">
                            <small>{{ $ad->user->name}}</small>
                        </div>
                        <a href="{{route("ads.show", $ad)}}" class="btn btn-dark letra">{{__('Mostrar más')}}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h2>{{__('Uy.. parece que no hay nada')}}</h2>
                <a href="{{route('ads.create')}}" class="btn btn-dark">{{__('Vende tu primer objeto')}}</a> o <a href="{{route('inicio')}}" class="btn btn-dark">{{__('Volver al inicio')}}</a>
            </div>
            @endforelse
        </div>
    </div>
            
        </div>
    </div> 
</x-layout>