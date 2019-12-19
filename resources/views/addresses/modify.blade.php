@extends('layouts.mainlayout')

@section('title', 'Nueva Direccion')

@section('content')
  <div class="container mb-5">
      <div class="row no-gutter"> <!-- Fila sin separacion entre divs -->

        <div class="col-md-4 d-none d-md-flex bg-image p-0"> <!-- Div mitad para la imagen -->
          <img src="/img/mailbox.jpg" alt="correo">
        </div>

        <div class="col-md-8 bg-light"> <!-- Div Mitad para el formulario -->
            <div class="d-flex align-items-center py-5">
              <div class="col-md-12 col-xl-10 mx-auto">
                  <h3 class="display-4">Modificar el domicilio</h3>
                  <form class="form" method="post" id="ABMDireccion" action="/address/modify">
                    @csrf
                      <div class="container">
                          <div class="row py-5 mt-4 align-items-center">
                              
                              <!-- Carga de Direcciones -->
                              <div class="col-md-7 col-lg-12 ml-auto">
                                  <div class="row">
                                        @foreach ($usuario->addresses as $address)
                                        <!-- Calle -->
                                        <input type="number" name="user_id" value="{{$usuario->id}}" id='user_id' hidden>
                                        <input type="number" name="provider_id" value="" id='provider_id' hidden>
                                        <div class="input-group col-lg-12 mb-4">
                                            <input id="street" type="text" name="street" value="{{$address->street}}" placeholder="Calle" class="form-control bg-white border-md" required>
                                        </div>

                                          <!-- Numero -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="number" type="integer" name="number" placeholder="Número" value="{{$address->number}}" class="form-control bg-white border-md" required>
                                          </div>

                                          <!-- Piso -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="floor" type="integer" name="floor" placeholder="Piso" value="{{$address->floor}}" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Departamento -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="apartment" type="text" name="apartment" placeholder="Dpto" value="{{$address->apartment}}" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Torre -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="unit_tower" type="text" name="unit_tower" placeholder="Torre" value="{{$address->unit_tower}}" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Barrio -->
                                          <div class="input-group col-lg-4 mb-4">
                                              <input id="neighborhood" type="text" name="neighborhood" placeholder="Barrio" value="{{$address->neighborhood}}" class="form-control bg-white border-md">
                                          </div>

                                          <!-- Ciudad -->
                                          <div class="input-group col-lg-5 mb-4">
                                              <input id="city" type="text" name="city" placeholder="Ciudad" value="{{$address->city}}" class="form-control bg-white border-md" required>
                                          </div>

                                          <!-- Código postal -->
                                          <div class="input-group col-lg-3 mb-4">
                                              <input id="zip_code" type="text" name="zip_code" placeholder="Código Postal" value="{{$address->zip_code}}" class="form-control bg-white border-md" required>
                                          </div>

                                          <!-- Provincia -->
                                          <div class="input-group col-lg-12 mb-4">
                                              <select id="province" name="province" class="form-control custom-select bg-white border-md" placeholder="Código Postal" selected="{{$address->province}}" required>

                                              </select>
                                          </div> <!-- Alias -->
                                          <div class="input.group col-md-12 mb4">
                                            <select id="alias" placeholder="Alias" name="alias" selected="{{$address->alias}}">
                                              <option value="Casa">Casa</option> 
                                              <option value="Trabajo">Trabajo</option>
                                              <option value="Otro">Otro</option>
                                            </select>
                                          </div>

                                          <!-- Botón para agregar -->
                                          <div class="form-group">
                                            <div class="col-lg-12">
                                              <br>
                                                <button class="btn btn-lg btn-success" type="submit"><ion-icon name="{{Auth::id()}}" href="/user/{{Auth::id()}}"></ion-icon> Guardar direccion y volver a cuenta.</button>
                                                <button class="btn btn-lg btn-light" type="reset"><ion-icon name="refresh"></ion-icon> Reiniciar</button>
                                            </div>
                                          </div>
                                      </div>
                                  </div>
                                  @endforeach
                          </div>
                      </div>

                  </form>
              </div> <!-- Fin Formulario -->

            </div> <!-- Fin contenedor centrado -->
        </div>

      </div>
  </div>
@endsection

@section('script-adicional')
<script>


window.addEventListener("load", function() {

fetch('https://apis.datos.gob.ar/georef/api/provincias?campos=nombre')
  .then(function(response){
    return response.json();
})
  .then(function(data){
    var provincias = data.provincias;
    var miSelect = document.getElementById('province');

    for (var i = 0; i < provincias.length; i++){
      miSelect.innerHTML += '<option>'+provincias[i].nombre+'</option>';
    }
  })
})

</script>

@endsection
