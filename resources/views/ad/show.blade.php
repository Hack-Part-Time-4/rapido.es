<x-layout>
    <div class="container-fluid">
        <div class="my-3 d-flex justify-content-center">
            <div class="col-12 col-md-6 form-control loginSide cardsVerMas text-center">
                <div id="adImages" class="carousel slide d-flex justify-content-center image-card w-100" date-bs-ride="true">
                    <div class="carousel-indicators">
                        @for($i=0; $i<$ad->images()->count(); $i++)
                        <button type="button" data-bs-target="#adImages" data-bs-slide-to="{{$i}}" 
                        class="@if($i==0) active @endif" aria-current="true" aria-label="Slide{{$i+1}}"></button>
                        @endfor
                    </div>

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($ad->images as $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img src="{{$image->getUrl(400,300)}}" class="d-block w-100 text-white" alt="First slide">
                        </div>
                        @endforeach

                        <div id="adImages" class="carousel-item">
                            <div class="carousel-indicators">
                                @for ($i = 0; $i < $ad->images()->count(); $i++)
                                    <button type="button" data-bs-target="#adImages" data-bs-slide-to="{{ $i }}"
                                        class="@if ($i == 0) active @endif" aria-current="true"
                                        aria-label="Slide {{ $i + 1 }}"></button>
                                @endfor
                            </div>
                        </div>
                            {{-- <div class="carousel-inner">
                                @foreach ($ad->images as $image)
                                    <div class="carousel-item @if ($loop->first) active @endif">
                                        <img src="{{ $image->getUrl(400, 300) }}" class="d-block w-100" alt="...">
                                    </div>
                                @endforeach
                            </div> --}}
                            <button class="carousel-control-prev" type="button" data-bs-target="#adImages"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">{{__('Anterior')}}</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#adImages"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">{{__('Next')}}</span>
                            </button>
                        </div>
                    </div>
            </div>
            <div class="container-fluid">
                <div class="col-12 col-md-6 w-100">
                    <h1 class="text-white"> {{($ad->title)}}</h1>
                    <h2 class="text-white"> {{$ad->price}} €</h2>
                    <div>
                        <h4 class="text-white">{{__('Descripción:')}}</h4> 
                        <p class="text-white">{{$ad->body}}</p>
                    <div class="mb-1 text-white"><b> {{__('Publicado el:')}}</b> {{$ad->created_at->format('d/m/Y')}}</div>
                    <div class="mb-1 text-white"><b> {{__('Por:')}}</b> {{$ad->user->name}}</div>
                    <div class="mb-1 text-white"><a class="category-tag" href="{{route('category.ads', $ad->category)}}">#{{$ad->category->name}}</a></div>
                    <div><a href="#" class="btn btn-danger">{{__('Comprar')}}</a></div>
                </div>
            </div>
        </div>
    </div>
        </div>
</x-layout>