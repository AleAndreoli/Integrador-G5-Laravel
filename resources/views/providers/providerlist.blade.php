@extends('layouts.mainlayout')

@section('title','Listado De Proveedores')

@section('content')

  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-4 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/tarimas.jpg" alt="tarimas">
        </div>

        <div class="col-md-8 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="d-flex align-items-center py-5">
              <ul class="list-group">
                @forelse ($proveedores as $proveedor)
                  <li class="list-group-item list-group-item-action"><a href="/provider/{{$proveedor->id}}">{{$proveedor->name}} {{$proveedor->id}}</a></li>
                @empty
                  <div class="col-md-12 col-xl-10 mx-auto">
                      <h3 class="display-4">No hay proveedores que mostrar!</h3>
                      <p class="text-muted mb-4">
                        Tu listado de proveedores se encuentra vacío en este momento.
                        <br>
                        A continuación podrás sumar algunos proveedores
                      </p>
                @endforelse
              </ul>


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
