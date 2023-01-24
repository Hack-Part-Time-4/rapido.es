<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-center mt-3">
                <h1 class="titulo">{{__('Mi perfil')}}</h1>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
        @forelse($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card animada-profile mb-5 text-center" >
                    <img src="{{!$ad->images()->get()->isEmpty() ? Storage::url($ad->images()->first()->path) : 'https://picsum.photos/400/300'}}" class="card-img-top" alt="...">                    
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
                        <a href="{{route("ads.show", $ad)}}" class="btn btn-dark letra">{{__('Mostrar más')}}</a>
                        <div>
                            <form class="mt-1" method="POST" action="{{route('ad.destroy', $ad->id)}}">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger letra" type="submit">{{__('Eliminar')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 mb-5">
                <h2>{{__('Uy.. parece que no hay nada')}}</h2>
                <a href="{{route('ads.create')}}" class="btn btn-dark me-3">{{__('Vende tu primer objeto')}}</a><a href="{{route('inicio')}}" class="btn btn-dark">{{__('Volver al inicio')}}</a>
            </div>
            @endforelse
        </div>
    </div>
          
        </div>
    </div> 
</x-layout>