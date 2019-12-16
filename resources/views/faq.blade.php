@extends('layouts.mainlayout')

@section('title', 'Preguntas Frecuentes')


@section('content')

  <div class="container">

    <div class="row d-flex justify-content-center">

      <div class="col-md-8">
        <h2 class="h1 text-center mb-3">Preguntas Frecuentes - FAQ</h2>
          <p>Recopilamos las consultas más frecuentes que suelen tener nuestros clientes. Esperamos te ayuden a aclarar tus dudas rápidamente. De todas formas, si no encuentras la respuesta a tu consulta.</p>
      </div>

    </div>

  </div>
  @include('layouts.acordeon')
@endsection
