<x-layout>
    <x-slot name='title'>{{__('Affiliate - Vende algo interesante')}}</x-slot>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card loginSide">
                    <div class="card-header text-center text-white">
                        {{__('Nuevo anuncio')}}
                    </div>
                    <div class="card-body">
                        <livewire:create-ad/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>