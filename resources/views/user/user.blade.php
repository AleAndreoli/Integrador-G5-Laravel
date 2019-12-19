@extends('layouts.mainlayout')

@section('title')
  Tu cuenta, {{$usuario->name}}
@endsection

@section('content')
<hr>
  <div class="container-fluid mb-5">
    <div class="row">
  		<div class="col-md-12 my-5 bg-secondary text-white py-3">
        <h1>
         {{$usuario->name}} {{$usuario->last_name}}
        </h1>
      </div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--Barra lateral-->


      <div class="text-center mt-2">
          <img src="{{$usuario->avatar}}" class="img-circle img-thumbnail" alt="avatar">
        </div>

      </hr> <br>

          <ul class="list-group">
            <li class="list-group-item text-muted">Resumen Actividades</li>
            <!--la idea es contar PHP pedidos del usuario, productos faveados y comentarios-->
            <li class="list-group-item text-right"><span class="float-left"><strong>Compras</strong></span>
              @if ($usuario->shoppingCarts != null)
                {{$usuario->shoppingCarts->where('closed_at','!=', null)->count()}}
              @else
                0
              @endif

            </li>
            <li class="list-group-item text-right"><span class="float-left"><strong>Favoritos</strong></span>{{$usuario->favorites->unique()->count()}}</li>
            <li class="list-group-item text-right"><span class="float-left"><strong>Comentarios</strong></span> 37</li>
          </ul>


        </div><!--Fin barra lateral-->
    	<div class="col-sm-9"> <!--Pestañas-->
            <ul class="nav nav-tabs">
                <li class="active nav-item"><a class="nav-link" data-toggle="tab" href="#home">Mi Perfil</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#compras">Mis Compras</a></li>
                <li><a class="nav-link" data-toggle="tab" href="#direcciones">Mis Direcciones</a></li>
            </ul>


          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" method="post" enctype="multipart/form-data" id="registrationForm">
                    @csrf
                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="name">
                                <h4>
                                  Nombre:
                                </h4>
                              </label>
                              <input type="text" class="form-control" name="name" id="name" value='{{$usuario->name}}'placeholder="">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="last_name">
                              <h4>
                                Apellido
                              </h4>
                            </label>
                              <input type="text" class="form-control" name="last_name" id="last_name" value='{{$usuario->last_name}}' placeholder="">
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="email">
                              <h4>
                                e-Mail
                              </h4>
                            </label>
                              <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value='{{$usuario->email}}' placeholder="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                      </div>

                      <div class="form-group">

                          <div class="col-xs-6">
                              <label for="password"><h4>Contraseña</h4></label>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              <small id="passwordHelp" class="form-text text-muted">Tiene que contener 8 dígitos alfanuméricos.</small>
                          </div>
                      </div>
                      <div class="form-group">

                          <div class="col-xs-6">
                            <label for="password-confirm"><h4>Verificar Contraseña</h4></label>
                              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                      </div>
                      <h4>Modificar Mi Imagen De Perfil</h4>
                      <div class="custom-file">
                        <div class="col-xs-6">
                          <label class="custom-file-label" for="carga-img">Seleccione Archivo</label>
                          <input type="file" class="custom-file-input" name="avatar" lang="es">
                        </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><ion-icon name="checkmark-circle-outline"></ion-icon> Guardar Cambios</button>
                               	<button class="btn btn-lg btn-light" type="reset"><ion-icon name="refresh"></ion-icon> Reiniciar</button>
                            </div>
                      </div>

              	</form>

              <hr>

            </div><!--Final Pestaña Perfil-->
             <div class="tab-pane" id="compras">

               <h2></h2>

               <table class="table table-striped table-hover">
    						<thead>
    							<tr>
    								<th>
    									#
    								</th>
    								<th>
    									Pedido Nº
    								</th>
    								<th>
    									Fecha
    								</th>
    								<th>
    									Estado
    								</th>
    							</tr>
    						</thead>
    						<tbody>
    							<tr class="table-active">
                    @if ($usuario->shoppingCarts!=null)
                      @foreach ($usuario->shoppingCarts as $cart)
                        <td>
        									{{$loop->index()}}
        								</td>
        								<td>
        									{{$cart->id}}
        								</td>
        								<td>
        									{{$cart->created_at}}
        								</td>
        								<td>
        									{{$cart->state}}
        								</td>
                      @endforeach
                    @else
                      <p>No hay compras hechas hasta el momento</p>
                    @endif


    							</tr>

    						</tbody>
    					</table>

            </div><!--Final Pestaña Pedidos-->

             <div class="tab-pane" id="direcciones">
             @forelse ($usuario->addresses as $address)
               <h2></h2>                
               
               <div class="row">
    						<div class="col-md-4">
    							<div class="card bg-default">
    								<h5 class="card-header">
    									{{$address->alias}}
    								</h5>
    								<div class="card-footer">
    									{{$address->street}} {{$address->number}} {{$address->floor}} {{$address->apartment}} <br>
                      {{$address->neighborhood}} <br>
                      @forelse ($usuario->telephones as $tele)
                      {{$tele->areaCode}} {{$tele->number}}
                      @empty
                      <p>No cargaste tu número</p>
                      @endforelse
                      <br>
                      {{$address->zip_code}} <br>
                      {{$address->city}}, {{$address->province}} <br>
                      <br>
                      <div class="dropdown">

                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown">
                          Opciones
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                           <a class="dropdown-item" href="#">Elegir como predeterminada</a> <a class="dropdown-item" href="/address/modify/{{Auth::id()}}" name="$address->id">Modificar</a> <a class="dropdown-item" href="#">Eliminar</a>
                        </div>

    								</div>
    							</div>
    							</div>
                </div>
                @empty
                <div class="col-md-6">
                      <p>No tenés domicilios cargados hasta el momento.</p>
                      </div>
                    @endforelse
    						
    						</div>
    					</div>
    				</div>

          </div><!--Final Pestaña Direcciones-->
        </div>

        </div><!--Final PESTAÑAS-->
    </div><!--Final fila cenral-->
@endsection
