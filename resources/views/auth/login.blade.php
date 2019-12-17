@extends('layouts.mainlayout')

@section('content')


  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-6 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/carretilla.jpg" alt="Carretilla">
        </div>

        <div class="col-md-6 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="login d-flex align-items-center py-5">
              <div class="col-md-12 col-xl-10 mx-auto">
                  <h3 class="display-4">¡Bienvenido!</h3>
                  <p class="text-muted mb-4">Completa los datos para ingresar a tu cuenta.</p>
                  <form method="post" action="{{ route('login') }}">
                    @csrf
                      <div class="form-group mb-3">
                        <label for="email">Correo electrónico:</label>
                        <input type="email" class="form-control h6  @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="email@dominio.com" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                      </div>
                      <div class="form-group mb-3">
                        <label for="password">Contraseña:</label>
                        <input type="password" class="form-control h6 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" id="password" placeholder="">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                      </div>

                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label h6 my-1" for="remember">Recordar mi usuario</label>
                      </div>
                      <button type="submit" class="btn btn-dark rounded-pill btn-block">Ingresar</button>

                      @if (Route::has('password.request'))
                          <a type="" class="nav-link strong mt-3" href="{{ route('password.request') }}" name="button">¿Olvidaste tu cuenta?</a>
                      @endif

                  </form>
              </div> <!-- Fin Formulario -->

            </div> <!-- Fin contenedor centrado -->
            <div class="col-md-12 col-xl-10 mx-auto"> <!-- Div Envío a registro Formulario -->
              <h4 class="display-5">¿No Tenés Cuenta?</h4>
              <p class="text-muted mb-4">Es necesario tener una cuenta para adquirir nuestros productos o servicios... Es rápido, es fácil Y ES GRATIS. <br>
              Te invitamos a completar el formulario de registro... </p>
              <a type="" class="btn btn-dark rounded-pill btn-block" href="{{ route('register') }}" name="button">Quiero Registrarme</a>
            </div>
        </div>

      </div>
  </div>

@endsection
