@extends('layouts.mainlayout')

@section('content')
    <div class="card">
    	<div class="row no-gutters">
    		<aside class="col-sm-5 border-right">
    <article class="gallery-wrap">
    <div class="img-big-wrap">
      <div> <a href=# data-fancybox=""><img src="/img/pintor.jpg"></a></div>
    </div> <!-- slider-product.// -->
    <div class="img-small-wrap">
      <div class="item-gallery"> <img src="/img/pintor.jpg"></div>
      <div class="item-gallery"> <img src="/img/flores.jpg"></div>
      <div class="item-gallery"> <img src="/img/helechos.jpg"></div>
      <div class="item-gallery"> <img src="/img/pintor.jpg"></div>
    </div> <!-- slider-nav.// -->
    </article> <!-- gallery-wrap .end// -->
    		</aside>
    		<aside class="col-sm-7">
    <article class="p-5">
    	<h3 class="title mb-3">nombre</h3>

    <div class="mb-3">
    	<var class="price h3 text-warning">
    		<span class="currency">$</span><span class="num">500</span>
    	</var>
    </div>
    <dl>
      <dt>Descripción</dt>
      <dd><p>Planta plantosa</p></dd>
    </dl>
    <dl class="row">
      <dt class="col-sm-3">Ideal para:</dt>
      <dd class="col-sm-9">Interiores / Galerías cubiertas </dd>

      <dt class="col-sm-3">Envíos:</dt>
      <dd class="col-sm-9">Sólo en la ciudad </dd>
    </dl>
    <div class="rating-wrap">

    	<ul class="rating-stars">
    		<li style="width:80%" class="stars-active">
    			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
    			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
    			<i class="fa fa-star"></i>
    		</li>
    		<li>
    			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
    			<i class="fa fa-star"></i> <i class="fa fa-star"></i>
    			<i class="fa fa-star"></i>
    		</li>
    	</ul>
    	<div class="label-rating">32 reseñas</div>
    	<div class="label-rating">154 vendidas </div>
    </div> <!-- rating-wrap.// -->
    <hr>
    	<div class="row">
    		<div class="col-sm-5">
    			<dl class="dlist-inline">
    			  <dt>Cantidad: </dt>
    			  <dd>
              <input name="cantidad" type="number" class="form-control form-control-sm" style="width:70px;">
            </dd>
    			</dl>  <!-- item-property .// -->
    		</div> <!-- col.// -->
    		<div class="col-sm-7">
    			<dl class="dlist-inline">
    			</dl>  <!-- item-property .// -->
    		</div> <!-- col.// -->
    	</div> <!-- row.// -->
    	<hr>
      @guest
        <h5> Atención humano! </h6>
        <br>
        <p> Para adquirir nuestros productos es ABSOLUTAMENTE necesario que estés <a href="/register">registrado</a> y hayas <a href="/login">iniciado sesión</a>. <br>
        Si eres un robot no deberías estar leyendo esto... Mucho menos intentando hacer compras! </p>
      @endguest

      @auth
        @if (Auth::user()->esAdmin == 1)
          	<a href="#" class="btn  btn-outline-primary"> <i class="fas fa-edit"></i> Editar Elemento! </a>
        @else
          <a href="#" class="btn  btn-outline-primary" id="botonCompra"> <i class="fas fa-shopping-cart"></i> Agregar al carrito </a>
        @endif
      @endauth

    </article> <!-- card-body.// -->
    		</aside> <!-- col.// -->
    	</div> <!-- row.// -->
    </div> <!-- card.// -->

  @endsection

  @section('script-adicional')
  <script type="text/javascript">
    var carrito = document.getElementById('botonCompra');
    carrito.onclick = showAlert;

    function showAlert(event) {
        //revisar si hay un carrito en session
        // llamar al controlador para crear carrito si es necesario
        // agregar el producto al carrito
        swal("Click en el carrito");
      }

  </script>
  @endsection
