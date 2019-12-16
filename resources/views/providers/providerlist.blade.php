@extends('layouts.mainlayout')

@section('title','Listado De Proveedores')

@section('content')

  <ul>
    @forelse ($proveedores as $proveedor)
      <li><a href="/provider/{{$proveedor->id}}">{{$proveedor->name}}</a></li>
    @empty
      <p>No hay proveedores que mostrar! BURRO!</p>
    @endforelse
  </ul>

@endsection
