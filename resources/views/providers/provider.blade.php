@extends('layouts.mainlayout')

@section('title')
  {{$proveedor->name}}
@endsection

@section('content')

  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-4 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/proveedor.jpg" alt="proveedor">
        </div>

        <div class="col-md-8 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="login d-flex align-items-center py-5">
              <div class="col-md-12 col-xl-10 mx-auto">
                  <h1 class="display-4">{{$proveedor->name}}</h1>
                  <p class="text-muted mb-4">Es posible editar los datos del proveedor. No olvides guardar los cambios al finalizar.</p>
                  <form class="form" action="{{route('editarProveedor', ['id' => $proveedor->id])}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    {{csrf_field()}}
                      <div class="form-group mb-3">
                        <label for="name">Nombre: </label>
                        <input type="text"  class="form-control" name="name" value="{{$proveedor->name}}">
                      </div>
                      <div class="form-group mb-3">
                        <label for="billing_method">Método de facturación: </label>
                        <input type="text"  class="form-control" name="billing_method" value="{{$proveedor->billing_method}}">
                      </div>

                      <div class="form-group">
                        <div class="col-xs-12">
                          <br>
                            <button class="btn btn-lg btn-success" type="submit"><ion-icon name="checkmark-circle-outline"></ion-icon> Guardar Cambios</button>
                            <button class="btn btn-lg btn-light" type="reset"><ion-icon name="refresh"></ion-icon> Reiniciar</button>
                        </div>
                      </div>

                  </form>
              </div> <!-- Fin Formulario -->

            </div> <!-- Fin contenedor centrado -->
            <div class="col-md-12 col-xl-10 mx-auto"> <!-- Div Envío a registro Formulario -->
              <h4 class="display-5">¿Querés agregar un nuevo proveedor?</h4>
              <p class="text-muted mb-4">
              Te invitamos a completar el formulario de registro de proveedores... </p>
              <a type="" class="btn btn-dark rounded-pill btn-block" href="/provider/add" name="button">Nuevo Proveedor</a>
            </div>
        </div>

      </div>
  </div>

@endsection
