<x-layout>
    <x-slot name='title'>Affiliate - Homepage</x-slot>
    
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="titulo my-5">{{__('Bienvenido a Affiliate.')}}</h1>
            </div>
    </div>

    <!-- CARRUSEL DE PROMOCIONES -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://thumbs.dreamstime.com/b/dise%C3%B1o-de-plantillas-banner-s%C3%BAper-venta-para-promociones-medios-y-promoci%C3%B3n-sociales-fondo-183029584.jpg" class="d-block w-100 image-modify" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://cursosgratuitos.grupoeuroformac.com/2065/comm031po-marketing-online-diseno-promocion-sitios-web-comercio.jpg" class="d-block w-100 image-modify" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://thumbs.dreamstime.com/b/vector-del-icono-de-la-promoci%C3%B3n-colecci%C3%B3n-negocio-l-nea-fina-ejemplo-esquema-promoci-n-s-mbolo-linear-para-el-uso-en-web-y-los-142612305.jpg" class="d-block w-100 image-modify" alt="...">
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


  <div class="container my-5">
    PROBANDO
  </div>


    <!-- CARDS DE ANUNCIOS -->
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h2 class="titulo my-5">{{__('Últimos anuncios')}}</h2>
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
                            <strong><a href="{{route('category.ads',$ad->category)}}">#{{$ad->category->name}}</a></strong>
                            <i>{{$ad->created_at->format('d/m/Y')}}</i>
                        </div>
                        <div class="card-subtitle mb-2">
                            <small>{{ $ad->user->name}}</small>
                        </div>
                        <a href="{{route("ads.show", $ad)}}" class="btn btn-dark">{{__('Mostrar más')}}</a>
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