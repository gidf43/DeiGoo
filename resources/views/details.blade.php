@extends('layouts.carlayout')
@section('title','Detalhes')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="/">DEi<span style="color:#C800FF">Goo</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item active"><a href="{{ route('car') }}" class="nav-link">Carros</a></li>
	          <li class="nav-item"><a href="{{ route('contactos') }}" class="nav-link">Contactos</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
<!-- END nav -->

@section('content')

	<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Detalhes do Carro <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">Detalhes do Carro</h1>
          </div>
        </div>
      </div>
    </section>


	<section class="ftco-section ftco-car-details">
      <div class="container">

      	<div class="row justify-content-center">
      		<div class="col-md-12">

      			<div class="car-details">
      				<div class="img rounded" style="background-image: url(/assets/{{$detail->imagem_carro}});"></div>
      				<div class="text text-center">
      					
      					<h2>{{$detail->nome}}</h2>
      				</div>
      			</div>
      		</div>
      	</div>

      	<div class="row">
      		<div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-dashboard"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Mileage
		                	<span>40,000</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-pistons"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Transmission
		                	<span>Manual</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car-seat"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Seats
		                	<span>5 Adults</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-backpack"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Luggage
		                	<span>4 Bags</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
          <div class="col-md d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="media-body py-md-4">
              	<div class="d-flex mb-3 align-items-center">
	              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-diesel"></span></div>
	              	<div class="text">
		                <h3 class="heading mb-0 pl-3">
		                	Fuel
		                	<span>Petrol</span>
		                </h3>
	                </div>
                </div>
              </div>
            </div>      
          </div>
		 
      	</div>
		<div style="intem-align:center text-algin:center">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
							Arrendar Agora
						</button>
		</div>

      	<div class="row">
      		<div class="col-md-12 pills">
						<div class="bd-example bd-example-tabs">
							<div class="d-flex justify-content-center">
							  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

							    <li class="nav-item">
							      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Acêssorios</a>
							    </li>
							    <li class="nav-item">
							      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Descrição</a>
							    </li>
							  </ul>
							</div>

						  <div class="tab-content" id="pills-tabContent">
						    <div class="tab-pane fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
						    	<div class="row">
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Airconditions</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Child Seat</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>GPS</li>
						    				
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Seat Belt</li>
						    				<li class="remove"><span class="ion-ios-close"></span>Sleeping Bed</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Water</li>
						    			
						    			</ul>
						    		</div>
						    		<div class="col-md-4">
						    			<ul class="features">
						    				<li class="check"><span class="ion-ios-checkmark"></span>Audio input</li>
						    				<li class="check"><span class="ion-ios-checkmark"></span>Long Term Trips</li>
						    				
						    			</ul>
						    		</div>

						    	</div>
						    </div>

						    <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
						      <p> {{ $detail->descricao }} </p>
									
							</div>

						    
						  </div>
						</div>
		      </div>
				</div>
      
		</div>

    </section>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Terminar Arrendamento</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<h5>Termine o Arrendamneto pelos seguintes meios</h5>
			<span>Pelo Email: </span><a target="_black" type="mail" href="mailto:infodeigoo@gmail.com">infodeigoo@gmail.com</a>
			<br>
			<span>Baixe a App: </span><a target="_black"  href="https://googleply.com/deigoo.app">Pelo Nosso Aplicativo</a>
			<br>
			<span>WhatSapp: </span><a target="_black"  href="https://api.whatsapp.com/send?phone=55244...&text=Ol%C3%A1,%20Gostaria%20de%20Saber%20mais%20sobre%20a%20DeiGoo.">Mandar No WhatSapp</a>
              <br>
			<span>Ligue Agora: </span><a target="_black" href="callto: +2449232039493 ">Atendimento personalizado.</a>
			<br>
			<span>Pelo Site: </span><a target="_black" href="{{route('contactos')}}">Contacto dentro do site.</a>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
			
		</div>
		</div>
	</div>
	</div>

	<section class="ftco-section ftco-no-pt">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">Temos a melhor qualidade ao melhor preço!</span>
            <h2 class="mb-2">Outros Carros </h2>
          </div>
        </div>
        <div class="row">
			@foreach($cars as $car)
        	<div class="col-md-4">
    				<div class="car-wrap rounded ftco-animate">
    					<div class="img rounded d-flex align-items-end" style="background-image: url(/assets/{{$car->imagem_carro}});">
    					</div>
    					<div class="text">
    						<h2 class="mb-0"><a href="/car/details/{{$car->id}}">{{$car->nome}}</a></h2>
    						<div class="d-flex mb-3">
	    						<span class="cat">Cheverolet</span>
	    						<p class="price ml-auto">{{$car->Preco->preco}} Kz <span>/Dia</span></p>
    						</div>
    						<p class="d-flex mb-0 d-block"> <a href="/car/details/{{$car->id}}" class="btn btn-secondary py-2 ml-1">Mais Detalhes</a></p>
    					</div>
    				</div>
    			</div>
    		@endforeach
        </div>
    	</div>
    </section>

























































@endsection