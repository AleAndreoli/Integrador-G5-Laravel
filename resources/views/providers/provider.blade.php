@extends('layouts.mainlayout')

@section('title','{{$proveedor->name}}')

@section('content')
  <h1>{{$proveedor->name}}</h1>

  <form class="" action="{{route('editarProveedor')}}" method="post">
      <input type="hidden" name="_method" value="PUT">
      {{csrf_field()}}
      <label for="name">Nombre: </label>
      <input type="text" name="name" value="@isset($proveedor)
        {{$proveedor->name}}
      @endisset"><br>
      <label for="billing_method">Método de facturación: </label>
      <input type="text" name="billing_method" value="@isset($proveedor)
        {{$proveedor->billing_method}}
      @endisset"><br>

      <div class="form-group">
        <div class="col-xs-12">
          <br>
            <button class="btn btn-lg btn-success" type="submit"><ion-icon name="checkmark-circle-outline"></ion-icon> Guardar Cambios</button>
            <button class="btn btn-lg btn-light" type="reset"><ion-icon name="refresh"></ion-icon> Reiniciar</button>
        </div>
      </div>
    </form>
@endsection
