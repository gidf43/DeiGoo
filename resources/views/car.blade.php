@extends('layouts.carlayout')
@section('title','Carros')
@section('content')

<style>
	.block-27 {
    display: inline-block;
		}

		.block-27 ul {
			padding-left: 0;
			list-style: none;
		}

		.block-27 li {
			display: inline;
			margin-right: 5px;
		}

		.block-27 a,
		.block-27 span {
			display: inline-block;
			padding: 0.5em 1em;
			border: 1px solid #ddd;
			border-radius: 5px;
			color: #333;
			text-decoration: none;
		}

		.block-27 a:hover {
			background-color: #f5f5f5;
			border-color: #ddd;
		}

		.block-27 .active span {
			background-color: #007bff;
			color: #fff;
			border-color: #007bff;
		}

</style>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">DEi<span style="color:#C800FF">Goo</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item active" ><a href="{{ route('car') }}" class="nav-link">Carros</a></li>
	          <li class="nav-item"><a href="{{ route('contactos') }}" class="nav-link">Contactos</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
<!-- END nav -->

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Carros <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Escolha o seu Carro</h1>
          </div>
        </div>
      </div>
    </section>
		
<!---
	<section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row">
			@foreach($car as $carrs)
    			<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(/assets/{{$carrs->imagem_carro}});">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="">{{$carrs->nome}}</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Model New </span>
	    						<p class="price ml-auto">{{$carrs->Preco->preco}} Kz<span>/Dia</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"><a href="/car/details/{{$carrs->id}}" class="btn btn-secondary py-2 ml-1">Ver Detalhes</a></p>
    					</div>
    				</div>
    			</div>
			@endforeach
    		</div>

    	<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="">&lt;</a></li>
				
                <li><a href="">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>

    	</div>
    </section>
-->

<section class="ftco-section bg-light">
    <div class="container">
        <!-- Search Form -->
        <div class="row mb-4">
            <div class="col-md-12">
                <form action="{{ route('car') }}" method="GET">
				@csrf
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Procurar carro pelo nome" value="{{ request('search') }}">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="submit">Buscar</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            @foreach($car as $carrs)
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end" style="background-image: url(/assets/{{$carrs->imagem_carro}});">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="">{{$carrs->nome}}</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">Model New </span>
                            <p class="price ml-auto">{{$carrs->preco->preco}} Kz<span>/Dia</span></p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="/car/details/{{$carrs->id}}" class="btn btn-secondary py-2 ml-1">Ver Detalhes</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- Pagination Links -->
       
		<div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    {{ $car->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>

    </div>
</section>


    @endsection