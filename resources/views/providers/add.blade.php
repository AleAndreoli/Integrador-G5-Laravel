@extends('layouts.mainlayout')

@section('title', 'Nuevo Proveedor')

  @section('content')
    <div class="container m-auto">
    <div class="row justify-content-center">

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

    </div>
    </div>

@endsection
