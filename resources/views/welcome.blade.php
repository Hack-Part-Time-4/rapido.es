<x-layout>
    <x-slot name='title'>Affiliate - Homepage</x-slot>
    
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="titulo">{{__('Bienvenido a Affiliate')}}</h1>
            </div>
    </div>

  

    <div class="container">
        <div class="row">
        @forelse($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card mb-5">
                    <img src="{{!$ad->images()->get()->isEmpty() ? Storage::url($ad->images()->first()->path) : 'https://via.placeholder.com/150'}}" class="card-img-top" alt="...">                    
                                        <div class="card-body">
                        <h5 class="card-title"> {{$ad->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
                        <p class="card-text">{{$ad->body}}</p>
                        <div class="card-subtitle mb-2">
                            <strong><a href="{{route('category.ads',$ad->category)}}">#{{$ad->category->name}}</a></strong>
                            <i>{{$ad->created_at->format('d/m/Y')}}</i>
                        </div>
                        <div class="card-subtitle mb-2">
                            <small>{{ $ad->user->name}}</small>
                        </div>
                        <a href="{{route("ads.show", $ad)}}" class="btn btn-primary">{{__('Mostrar más')}}</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h2>{{__('Uy.. parece que no hay nada')}}</h2>
                <a href="{{route('ads.create')}}" class="btn btn-success">{{__('Vende tu primer objeto')}}</a> o <a href="{{route('inicio')}}" class="btn btn-primary">{{__('Volver al inicio')}}</a>
            </div>
            @endforelse
        </div>
    </div>
            
        </div>
    </div> 
</x-layout>