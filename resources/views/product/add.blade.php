@extends('layouts.mainlayout')

@section('title', 'Agregar Producto')

  @section('content')
    <div class="container mb-5">
    <div class="row justify-content-center">

      <form class="form" method="post" enctype="multipart/form-data" id="ABMProducto">
        @csrf
          <div class="form-group">

            <div class="col-xs-6">
                <label for="name">
                  <h4>
                    Nombre Producto <!--Requiere lógica de nombre para producto existente o preguntar nombre-->
                  </h4>
                </label>
                <input type="text" class="form-control" name="name" id="name" value='' placeholder="Nombre/s">
            </div>

          </div>

          <div class="form-group">

            <div class="col-xs-6">
                <label for="price">
                  <h4>
                    Precio
                  </h4>
                </label>
                <input type="text" class="form-control" name="price" id="price" value='' placeholder="precio">
            </div>

          </div>

          <div class="form-group">

            <div class="col-xs-6">
                <label for="description">
                  <h4>
                    Descripción
                  </h4>
                </label>
                <textarea rows="8" cols="80" form="ABMProducto" class="form-control" name="description" id="description" value='' placeholder="Ingrese una descripción breve del producto">
                </textarea>
            </div>

          </div>

          <div class="form-group">

            <div class="col-xs-6">
                <label for="provider_id">
                  <h4>
                    Proveedor
                  </h4>
                </label>
                <select class="" name="provider_id">
                  @foreach ($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->name}}</option>
                  @endforeach
                </select>

            </div>

          </div>

            <div class="form-group">

              <div class="col-xs-6">
                  <label for="category_id">
                    <h4>
                      Categoria
                    </h4>
                  </label>
                  <input type="text" class="form-control" name="category_id" id="category_id" value='' placeholder="Categoria">
              </div>

            </div>

          <h4>Cargar Imagen De Producto</h4>
          <div class="custom-file">
            <div class="col-xs-6">
              <label class="custom-file-label" for="carga-img">Seleccione Archivo</label>
              <input type="file" class="custom-file-input" name="fotoperfil" lang="es">
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

    </div>
    </div>
  @endsection
