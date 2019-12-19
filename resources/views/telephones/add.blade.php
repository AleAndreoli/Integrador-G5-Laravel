@extends('layouts.mainlayout')

@section('title', 'Nuevo Telefono')

@section('content')

<div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-4 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/telefono.png" alt="telefono">
        </div>

        <div class="col-md-8 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="d-flex align-items-center py-5">
              <div class="col-md-12 col-xl-10 mx-auto">
                  <h3 class="display-4">Agregar un nuevo teléfono</h3>
                  <form class="form" method="post" id="ABMDireccion">
                    @csrf
                    <div class="form-group">

                      <div class="container">
                          <div class="row py-5 mt-4 align-items-center">

                              <!-- Carga de Direcciones -->
                              <div class="col-md-7 col-lg-12 ml-auto">
                                  <form action="#">
                                      <div class="row">

                                        <!-- Alias -->
                                        <div class="input-group col-lg-12 mb-4">
                                            <input id="alias" type="text" name="alias" placeholder="Alias" class="form-control bg-white border-md" required>
                                        </div>

                                          <!-- Codigo Area -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="area_code" type="integer" name="area_code" placeholder="Código de área" class="form-control bg-white border-md" required>
                                          </div>

                                          <!-- Numero -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="number" type="integer" name="number" placeholder="Número" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Tipo -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="type" type="text" name="type" placeholder="Tipo" class="form-control bg-white border-md">
                                          </div>



                                          <!-- Botón para agregar -->
                                          <div class="form-group">
                                            <div class="col-lg-12">
                                              <br>
                                                <button class="btn btn-lg btn-success" type="submit"><ion-icon name="checkmark-circle-outline"></ion-icon> Guardar Teléfono</button>
                                                <button class="btn btn-lg btn-light" type="reset"><ion-icon name="refresh"></ion-icon> Reiniciar</button>
                                            </div>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </div>

                  </form>
              </div> <!-- Fin Formulario -->

            </div> <!-- Fin contenedor centrado -->
        </div>

      </div>
  </div>
@endsection
