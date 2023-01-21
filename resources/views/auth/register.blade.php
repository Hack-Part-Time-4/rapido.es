<x-layout>
<x-slot name="title">{{__('Affiliate - Registro')}}</x-slot>
<!-- ===== REGISTER ===== -->
<div class="container-fluid register-view bg-accent vh-100">
    <div class="row mb-5">
        <div class="col-12 col-md-8 createWidth">
            <div class="d-flex flex-column align-items-center">
            <div class="form-content justify-content-center mb-5 pb-5">
                <!-- FORM TITLE -->
                <div class="section-title mt-5 d-flex justify-content-center">
                    <h2 class="form-title">{{__('Crea tu cuenta')}}
                        <!-- <span> Rapido.es/</span> -->

                    </h2>
                    <!-- <p>Ut possimus qui ut temporibus culpa velit autem.</p> -->

                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <!-- FORM FIELDS -->
                <form action="/register" method="POST" role="form" class=" form-control php-email-form loginSide">
                    @csrf
                    <!-- Name -->
                    <div class="form-field-edit form-field space-around my-2">
                        <input type="text" name="name" id="name" class="form-control 
                        forms_field-input" placeholder="{{__('Tu nombre')}}" data-rule="minlen:4" 
                        data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <!-- Email -->
                    <div class="form-field-edit form-field space-around my-2">
                        <input type="email" name="email" id="email" class="form-control
                         forms_field-input" placeholder="{{__('Tu correo')}}" data-rule="minlen:4" 
                         data-msg="Please enter al least 4 chars">
                         <div class="validate"></div>
                    </div>
                    <!-- Password -->
                    <div class="form-field-edit form-field space-around my-2">
                        <input type="password" name="password" id="password" class
                        ="form-control forms_field-input" placeholder="{{__('Tu contraseña')}}">
                        <div class="validate"></div>
                    </div>
                    <!-- Password Confirmation -->
                    <div class="form-field-edit form-field space-around my-2">
                        <input type="password" name="password_confirmation" id="password"
                        class="form-control forms_field-input" placeholder="{{__('Repite tu contraseña')}}">
                        <div class="validate"></div>
                    </div>
                    <!-- Button Register -->
                    <div class="d-flex justify-content-center">
                    <button type="submit" class="form-button-edit text-center space-around my-2 btn btn-secondary btn-create">
                        {{__('Crear cuenta')}}
                    </button>
                    </div>
                </form>
                <div class="form-link d-flex justify-content-center">
                    <p class="text-dark mt-2">{{__('¿Ya eres de los nuestros?')}}</p>
                    <a class="text text-decoration-none ps-2 mt-2 entraYa" href="{{route('login')}}">
                        <u>{{__('¡Entra ya!')}}</u></a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>
</x-layout>