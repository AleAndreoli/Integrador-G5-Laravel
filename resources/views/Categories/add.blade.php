@extends('layouts.mainlayout')

@section('title', 'Nueva Categoria')

@section('content')
  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-4 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/categorias.jpg" alt="Lotos">
        </div>

        <div class="col-md-8 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="d-flex align-items-center py-5">
              <div class="col-md-12 col-xl-10 mx-auto">
                  <h3 class="display-4">Nueva Categoria</h3>
                  <p class="text-muted mb-4">Recuerde que al crear una categoria usted puede especificar una categoría padre, por ejemplo para la categoría "plasticas" usted podría elegir "Interior" como padre.</p>
                  <form class="form" method="post" id="ABMProveedor">
                    @csrf
                    <div class="form-group">

                      <div class="col-xs-6">
                        <label for="name">
                          <h4>
                          Nombre De La Categoría
                          </h4>
                        </label>
                        <input type="text" class="form-control" name="name" id="name" value='' placeholder="Nombre Categoria">
                      </div>

                    </div>

                    <div class="form-group">

                      <div class="col-xs-6">
                        <label for="billing_method">
                          <h4>
                          Categoría Padre
                          </h4>
                        </label>
                        <select class="form-control" name="billing_method" id="billing_method">
                            <option value="" selected> Ninguna </option>
                          @forelse ($categorias as $categoria)
                            <option value="/{{$categoria->id}}"> {{$categoria->name}} </option>
                          @empty
                            <option value="" disabled> No hay categorías cargadas </option>
                          @endforelse
                        </select>
                      </div>

                    </div>

                    <div class="form-group">
                      <div class="col-xs-12">
                        <br>
                          <button class="btn btn-lg btn-success" type="submit"><ion-icon name="checkmark-circle-outline"></ion-icon> Guardar Categoría </button>
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
