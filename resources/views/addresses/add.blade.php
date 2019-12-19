@extends('layouts.mainlayout')

@section('title', 'Nueva Direccion')

@section('content')
  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-4 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/mailbox.jpg" alt="semilla">
        </div>

        <div class="col-md-8 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="d-flex align-items-center py-5">
              <div class="col-md-12 col-xl-10 mx-auto">
                  <h3 class="display-4">Agregar una nueva dirección</h3>
                  <form class="form" method="post" id="ABMDireccion" action="/address/add">
                    @csrf
                    <div class="form-group">

                      <div class="container">
                          <div class="row py-5 mt-4 align-items-center">

                              <!-- Carga de Direcciones -->
                              <div class="col-md-7 col-lg-12 ml-auto">
                                  <form action="#">
                                      <div class="row">

                                        <!-- Calle -->
                                            <input type="number" name="user_id" value="{{$usuario->id}}" id='user_id' hidden>
                                        <div class="input-group col-lg-12 mb-4">
                                            <input id="street" type="text" name="street" placeholder="Calle" class="form-control bg-white border-md" required>
                                        </div>

                                          <!-- Numero -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="number" type="integer" name="number" placeholder="Número" class="form-control bg-white border-md" required>
                                          </div>

                                          <!-- Piso -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="floor" type="integer" name="floor" placeholder="Piso" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Departamento -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="apartment" type="text" name="apartment" placeholder="Dpto" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Torre -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="unit_tower" type="text" name="unit_tower" placeholder="Torre" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Barrio -->
                                          <div class="input-group col-lg-4 mb-4">
                                              <input id="neighborhood" type="text" name="neighborhood" placeholder="Barrio" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Ciudad -->
                                          <div class="input-group col-lg-5 mb-4">
                                              <input id="city" type="text" name="city" placeholder="Ciudad" class="form-control bg-white border-md" required>
                                          </div>

                                          <!-- Código postal -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="zip_code" type="text" name="zip_code" placeholder="Código Postal" class="form-control bg-white border-md" required>
                                          </div>

                                          <!-- Provincia -->
                                          <div class="input-group col-lg-12 mb-4">
                                              <select id="province" name="province" class="form-control custom-select bg-white border-md" placeholder="Código Postal" required>
                                                  <option value="">Selecciona tu provincia</option>
                                                  <option value="">Buenos Aires</option>
                                                  <option value="">Catamarca</option>
                                                  <option value="">Chaco</option>
                                                  <option value="">Chubut</option>
                                                  <option value="">Córdoba</option>
                                                  <option value="">Corrientes</option>
                                                  <option value="">Entre Ríos</option>
                                                  <option value="">Formosa</option>
                                                  <option value="">Jujuy</option>
                                                  <option value="">La Pampa</option>
                                                  <option value="">La Rioja</option>
                                                  <option value="">Mendoza</option>
                                                  <option value="">Misiones</option>
                                                  <option value="">Neuquén</option>
                                                  <option value="">Río Negro</option>
                                                  <option value="">Salta</option>
                                                  <option value="">San Juan</option>
                                                  <option value="">San Luis</option>
                                                  <option value="">Santa Cruz</option>
                                                  <option value="">Santa Fe</option>
                                                  <option value="">Santiago del Estero</option>
                                                  <option value="">Tierra del Fuego, Antártida e Islas del Atlántico Sur</option>
                                                  <option value="">Tucumán</option>
                                              </select>
                                          </div>

                                          <!-- Botón para agregar -->
                                          <div class="form-group">
                                            <div class="col-lg-12">
                                              <br>
                                                <button class="btn btn-lg btn-success" type="submit"><ion-icon name="checkmark-circle-outline"></ion-icon> Guardar Direccion</button>
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

{{-- @section('script-adicional')
<script type="text/javascript">
window.addEventListener("load", function() {
fetch("https://apis.datos.gob.ar/georef/api/provincias")
  .then(function(response) {
    return response.json();
  })
  .then(function(json) {
    select = document.getElementById('province')
    tipos = json.results

    for (var i = 0; i < tipos.length; i++) {
      select.innerHTML += "<option>" + tipos[i].nombre + "</option>"
    }
  });
});
</script>

@endsection --}}

{{-- <div class="container">
    <div class="row py-5 mt-4 align-items-center">

        <!-- Carga de Direcciones -->
        <div class="col-md-7 col-lg-6 ml-auto">
            <form action="#">
                <div class="row">

                  <!-- Calle -->
                  <div class="input-group col-lg-12 mb-4">
                      <input id="street" type="text" name="street" placeholder="Calle" class="form-control bg-white border-md">
                  </div>

                    <!-- Numero -->
                    <div class="input-group col-lg-3 mb-4">
                        <input id="number" type="integer" name="number" placeholder="Número" class="form-control bg-white border-md">
                    </div>

                    <!-- Piso -->
                    <div class="input-group col-lg-3 mb-4">
                        <input id="floor" type="integer" name="floor" placeholder="Piso" class="form-control bg-white border-md">
                    </div>

                    <!-- Departamento -->
                    <div class="input-group col-lg-3 mb-4">
                        <input id="apartment" type="text" name="apartment" placeholder="Dpto" class="form-control bg-white border-md">
                    </div>

                    <!-- Torre -->
                    <div class="input-group col-lg-3 mb-4">
                        <input id="unit_tower" type="text" name="unit_tower" placeholder="Torre" class="form-control bg-white border-md">
                    </div>

                    <!-- Barrio -->
                    <div class="input-group col-lg-4 mb-4">
                        <input id="neighborhood" type="text" name="neighborhood" placeholder="Barrio" class="form-control bg-white border-md">
                    </div>

                    <!-- Ciudad -->
                    <div class="input-group col-lg-5 mb-4">
                        <input id="city" type="text" name="city" placeholder="Ciudad" class="form-control bg-white border-md">
                    </div>

                    <!-- Código postal -->
                    <div class="input-group col-lg-3 mb-4">
                        <input id="zip_code" type="text" name="zip_code" placeholder="Código Postal" class="form-control bg-white border-md">
                    </div>

                    <!-- Provincia -->
                    <div class="input-group col-lg-12 mb-4">
                        <select id="province" name="province" class="form-control custom-select bg-white border-md">
                            <option value="">Selecciona tu provincia</option>
                            <option value="">Designer</option>
                            <option value="">Developer</option>
                            <option value="">Manager</option>
                            <option value="">Accountant</option>
                        </select>
                    </div>

                    <!-- Botón para agregar -->
                    <div class="form-group col-lg-12 mx-auto mb-0">
                        <a href="#" class="btn btn-primary btn-block py-2">
                            <span class="font-weight-bold">Agregar dirección</span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
