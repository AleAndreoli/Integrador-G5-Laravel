<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />
    <title>TiendaIntegrador</title>
  </head>
  <body>

    @include('layouts.header')


    <div class="card">
    	<div class="row no-gutters">
    		<aside class="col-sm-5 border-right">
    <article class="gallery-wrap">
    <div class="img-big-wrap">
      <div> <a href=# data-fancybox=""><img src="img/pintor.jpg"></a></div>
    </div> <!-- slider-product.// -->
    <div class="img-small-wrap">
      <div class="item-gallery"> <img src="img/pintor.jpg"></div>
      <div class="item-gallery"> <img src="img/pintor.jpg"></div>
      <div class="item-gallery"> <img src="img/pintor.jpg"></div>
      <div class="item-gallery"> <img src="img/pintor.jpg"></div>
    </div> <!-- slider-nav.// -->
    </article> <!-- gallery-wrap .end// -->
    		</aside>
    		<aside class="col-sm-7">
    <article class="p-5">
    	<h3 class="title mb-3">Nombre de la planta</h3>

    <div class="mb-3">
    	<var class="price h3 text-warning">
    		<span class="currency">$</span><span class="num">299</span>
    	</var>
    </div>
    <dl>
      <dt>Descripción</dt>
      <dd><p>Una descripción del producto, que puede ser extensa o no. Una descripción del producto, que puede ser extensa o no. Una descripción del producto, que puede ser extensa o no.</p></dd>
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
    			  	<select class="form-control form-control-sm" style="width:70px;">
    			  		<option> 1 </option>
    			  		<option> 2 </option>
    			  		<option> 3 </option>
                <option> 4 </option>
                <option> 5 </option>
                <option> 6 </option>
                <option> 7 </option>
    			  	</select>
    			  </dd>
    			</dl>  <!-- item-property .// -->
    		</div> <!-- col.// -->
    		<div class="col-sm-7">
    			<dl class="dlist-inline">
    			</dl>  <!-- item-property .// -->
    		</div> <!-- col.// -->
    	</div> <!-- row.// -->
    	<hr>
    	<!-- <a href="#" class="btn  btn-primary"> Comprar ahora </a> -->
    	<a href="#" class="btn  btn-outline-primary"> <i class="fas fa-shopping-cart"></i> Agregar al carrito </a>
    </article> <!-- card-body.// -->
    		</aside> <!-- col.// -->
    	</div> <!-- row.// -->
    </div> <!-- card.// -->

    @include('layouts.footer')
    <!-- Scripts -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>
