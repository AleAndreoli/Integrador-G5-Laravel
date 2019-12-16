@extends('layouts.mainlayout')

@section('title', 'Nuevo Proveedor')

@section('content')
  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-4 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/nuevoProveedor.jpg" alt="semilla">
        </div>

        <div class="col-md-8 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="d-flex align-items-center py-5">
              <div class="col-md-12 col-xl-10 mx-auto">
                  <h3 class="display-4">Información Básica</h3>
                  <p class="text-muted mb-4">En el futuro vamos a necesitar más información sobre nuestros proveedores, los formularios de edición permitirán invcluirla</p>
                  <form class="form" method="post" id="ABMProveedor">
                    @csrf
                    <div class="form-group">

                      <div class="col-xs-6">
                        <label for="name">
                          <h4>
                          Razón Social Proveedor
                          </h4>
                        </label>
                        <input type="text" class="form-control" name="name" id="name" value='' placeholder="Razón Social">
                      </div>

                    </div>

                    <div class="form-group">

                      <div class="col-xs-6">
                        <label for="billing_method">
                          <h4>
                          Forma de facturación
                          </h4>
                        </label>
                      <input type="text" class="form-control" name="billing_method" id="billing_method" value='' placeholder="Forma de facturación">
                      </div>

                    </div>

                    <div class="form-group">
                      <div class="col-xs-12">
                        <br>
                          <button class="btn btn-lg btn-success" type="submit"><ion-icon name="checkmark-circle-outline"></ion-icon> Guardar Proveedor</button>
                          <button class="btn btn-lg btn-light" type="reset"><ion-icon name="refresh"></ion-icon> Reiniciar</button>
                      </div>
                    </div>

                  </form>
              </div> <!-- Fin Formulario -->

            </div> <!-- Fin contenedor centrado -->
        </div>

      </div>
  </div>
@endsection
