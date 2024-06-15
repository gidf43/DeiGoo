<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>DeiGoo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/assets/css/open-iconic-bootstrap.min.css">

    <link rel="stylesheet" href="/assets/css/animate.css">
    <!--Icon -->
    <link href="/assets/support/APP-ICON.png" rel="icon">

    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/assets/css/aos.css">

    <link rel="stylesheet" href="/assets/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/icomoon.css">
    <link rel="stylesheet" href="/assets/css/style.css">


    <style>

        .spot{
            color:#000;
        }

    </style>

  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <!--<a class="navbar-brand" href="/">DEi<span style="color:#C800FF">Goo</span></a>
      --><a href="/" class="navbar-brand"> <img src="/assets/support/DEIGOO.png" alt="Logo" style="
          width: 105px;
          height: 40px;
      "></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="/#about" class="nav-link">Sobre Nós</a></li>
	          <li class="nav-item"><a href="/#services" class="nav-link">Serviços</a></li>
	          <li class="nav-item"><a href="{{ route('car') }}" class="nav-link">Carros</a></li>
	          <li class="nav-item"><a href="{{ route('contactos') }}" class="nav-link">Contactos</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('/assets/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
          <div class="col-lg-8 ftco-animate">
          	<div class="text w-100 text-center mb-md-5 pb-md-5">
	            <h1 class="mb-4">A Forma Mais Rápida &amp; Simples de Arrendar um Carro</h1>
            </div>
          </div>
        </div>
      </div>
    </div>

<!--Aonde está o botão model-->
     <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row no-gutters">
    			<div class="col-md-12	featured-top">
    				<div class="row no-gutters">
	  					<div class="col-md-4 d-flex align-items-center">
	  						<form class="request-form ftco-animate bg-primary">
		          		    <h2>Faça sua viagem com Estilo</h2>
			    				<div class="form-group">
			    					<label for="carro" class="label">Selecione o Carro</label>
                                    @if(isset($carro))
                                    <select name="" id="carro" class="form-control" required>
                                        <option  hidden >Selecione</option>
                                        @foreach($carro as $carros)
                                            <option value="{{$carros->id}}" 
                                                       style="color: #000;"
                                                    > {{$carros->nome}} </option>
                                        @endforeach
                                    </select>
                                    @else
                                  
                                    @endif
                                </div>
			    				<div class="form-group">
			    					<label for="" class="label">Selecione o Plano</label>
                                    @if(isset($plano))
                                        <select name="" id="" class="form-control" >
                                            <option  hidden >Selecione</option>
                                            @foreach($plano as $planos)
                                                <option value="{{$planos->id}}" 
                                                        style="color: #000;"
                                                        > {{$planos->nomePlano}} </option>
                                            @endforeach
                                        </select>
                                    @else

                                    @endif
                                    </div>
			    				<div class="d-flex">
			    					<div class="form-group mr-2">
			                <label for="" class="label">Adicione uma data</label>
			                <input type="text" class="form-control" name="datareceber" required id="book_pick_date" placeholder="Data de Recepção">
			              </div>
			              <div class="form-group ml-2">
			                <label for="" class="label">Data de Entrega</label>
			                <input type="text" name="dataentrega" class="form-control" required id="book_off_date" placeholder="Data de Entrega">
			              </div>
		              </div>
                      <!--
                        <div class="form-group">
                            <label for="" class="label">Adicione uma Hora</label>
                            <input type="time" name="horas" class="form-control" required placeholder="Horas">
                        </div>
                        -->
			            <div class="form-group">
                      
			              <input type="submit" value="Arrendar Agora" class="btn btn-secondary py-3 px-4" data-toggle="modal" data-target="#exampleModal">
			            </div>
			    			</form>
	  					</div>
	  					<div class="col-md-8 d-flex align-items-center">
	  						<div class="services-wrap rounded-right w-100">
	  							<h3 class="heading-section mb-4">Melhor Forma de Arrendar o Carro de Sua Preferência</h3>
	  							<div class="row d-flex mb-4">
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Defina Qual a  sua localização</h3>
				                </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-handshake"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Seleciona o Melhor Plano Para Ti</h3>
					              </div>
					            </div>      
					          </div>
					          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
					            <div class="services w-100 text-center">
				              	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-rent"></span></div>
				              	<div class="text w-100">
					                <h3 class="heading mb-2">Reserve o Carro que Deseja</h3>
					              </div>
					            </div>      
					          </div>
					        </div>
					        <p><a href="{{route('car')}}" class="btn btn-primary py-3 px-4">Reserve o Carro de Sua Preferência </a></p>
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
            <h5 class="modal-title" id="exampleModalLabel">Terminar Marcão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                  <h5>Termine o Arrendamneto pelos seguintes meios</h5>
              <span>Pelo Email: </span><a target="_black" type="email" href="mailto:infodeigoo@gmail.com">infodeigoo@gmail.com</a>
              <br>
              <span>Baixe a App: </span><a target="_black"  href="https://googleply.com/deigoo.app">Pelo Nosso Aplicativo</a>
              <br>
              <span>WhatSapp: </span><a target="_black"  href="https://api.whatsapp.com/send?phone=55244...&text=Ol%C3%A1,%20Gostaria%20de%20Saber%20mais%20sobre%20a%20DeiGoo.">Mandar No WhatSapp</a>
              <br>
              <span>Ligue Agora: </span><a href="callto: +2449232039493">Atendimento personalizado.</a>
              <br>
              <span>Pelo Site: </span><a target="_black" href="{{route('contactos')}}">Contacto dentro do site.</a>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center">
          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
          	<span class="subheading">O Que no Oferecemos</span>
            <h2 class="mb-2">Nossos Modelos </h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="carousel-car owl-carousel">
                <!-- carousel-car owl-carousel -->
            @if(isset($cars))
                @foreach($cars as $car)
                    <div class="item">
                    <div class="car-wrap rounded ftco-animate">
                        <div class="img rounded d-flex align-items-end" style="background-image: url(/assets/{{$car->imagem_carro}});">
                        </div>
                        <div class="text">
                        <h2 class="mb-0 text-center rent-price"><a href="#" style="color: #C800FF;">{{$car->nome}}</a></h2>
                            <div class="rent-price text-center" style="margin-top: 10px;">
                                <span style="font-size:20px; color: #364d59;"> {{ $car->Preco->preco }}  Kz/ Diário </span>
                            </div>
                            
                        <div class="mb-3">
                        
                            <div class="item-1">
                            <div class="item-1-contents">
                                <ul class="specs">
                                    <li>
                                    <span>Portas</span>
                                    <span class="spec">{{$car->portas}}</span>
                                    </li>
                                    <li>
                                    <span>Acentos</span>
                                    <span class="spec">{{$car->acentos}}</span>
                                    </li>
                                    <li>
                                    <span>Transmisão</span>
                                    <span class="spec">Automatico</span>
                                    </li>
                                    <li>
                                    <span>Data </span>
                                  
                                    <span class="spec">{{ date('Y', strtotime($car->data)) }}</span>
                                    </li>
                                </ul>
                            </div>
                            </div>  
                        </div>
                        <a href="/car/details/{{$car->id}}" class="btn btn-secondary py-2 ml-1">Ver Mais Details</a></p>
                        </div>
                    </div>
                    </div>
                @endforeach
            @else

            <h3 style="
                    color:red, text-align:center; font-size:20px; font-bottom: black;
                    border:1px 1px 1px solid Black;
            ">Nenhum carro ainda foi cadastrado no sistema.</h3>

            @endif 

                
    						
    					</div>

    				</div>
    			</div>
    		</div>
    	</div>
    </section>




    <section class="ftco-section ftco-about" id="about">
			<div class="container">
				<div class="row no-gutters">   
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(/assets/images/about.jpg);">
					</div>
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">Sobre Nós</span>
	            <h2 class="mb-4">Bem vindo a DeiGoo</h2>

	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	            <p><a href="{{route('contactos')}}" class="btn btn-primary py-3 px-4">Subscrever a nossa Newlestter</a></p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section" id="services">
			<div class="container">
				<div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Serviços</span>
            <h2 class="mb-3">Outros nossos Serviços</h2>
          </div>
        </div>
				<div class="row">
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-wedding-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Cêrimonia de Casamento</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Cidades por Cidades</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-car"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Busca em Aeroportos</h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
					<div class="col-md-3">
						<div class="services services-2 w-100 text-center">
            	<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-transportation"></span></div>
            	<div class="text w-100">
                <h3 class="heading mb-2">Conheça a Cidade com a Deigoo </h3>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-intro" style="background-image: url(/assets/images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row justify-content-end">
					<div class="col-md-6 heading-section heading-section-white ftco-animate">
            <h2 class="mb-3">Gostaria de se juntar a DeiGoo ? Então do quê está a espera.</h2>
            <a href="{{route('contactos')}}" class="btn btn-primary btn-lg">Seja um Parceiro!</a>
          </div>
				</div>
			</div>
		</section>

<!--
    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(/assets/images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(/assets/images/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(/assets/images/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(/assets/images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap rounded text-center py-4 pb-5">
                  <div class="user-img mb-2" style="background-image: url(/assets/images/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  -->

  <!--
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Blog</span>
            <h2>Recent Blog</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url(/assets/'images/image_1.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="blog-single.html" class="block-20" style="background-image: url(/assets/'images/image_2.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url(/assets/'images/image_3.jpg');">
              </a>
              <div class="text pt-4">
              	<div class="meta mb-3">
                  <div><a href="#">Oct. 29, 2019</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                <p><a href="#" class="btn btn-primary">Read more</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>	
  -->

    <section class="ftco-counter ftco-section img bg-light" id="section-counter" style="margin-top: 100px;">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row">
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="5">0</strong>
                <span>Anos de <br>Experiência</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="500">0</strong>
                <span>Total de <br>Carros</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text text-border d-flex align-items-center">
                <strong class="number" data-number="300">0</strong>
                <span>Clientes <br>Satisfeitos</span>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
            <div class="block-18">
              <div class="text d-flex align-items-center">
                <strong class="number" data-number="1050">0</strong>
                <span>Total de Pedidos <br>por Ano</span>
              </div>
            </div>
          </div>
        </div>
    	</div>
    </section>	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            <a href="/" class="navbar-brand"> <img src="/assets/support/DEIGOO.png" alt="Logo" style="
    width: 105px;
    height: 40px;
"></a>
        <p>Na DeiGoo, encontras as melhores opções de Aluguel de Carro e os melhores Preços.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Informação</h2>
              <ul class="list-unstyled">
                <li><a href="/#about" class="py-2 d-block">Sobre Nós</a></li>
                <li><a href="/#services" class="py-2 d-block">Serviços</a></li>
                <li><a href="terms" class="py-2 d-block">Termos e Condições</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Alguma Pergunta?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View. </span></li>
	                <li><a href="callto: +2449232039493"><span class="icon icon-phone"></span><span class="text">+244 923 399 210</span></a></li>
	                <li><a type="email" href="mailto:infodeigoo@gmail.com"><span class="icon icon-envelope"></span><span class="email">infodeigoo@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> Direitos Reservados | Feito pela Black-Machine <i class="icon-heart color-danger" aria-hidden="true"></i>  
            </p>
            
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#8507A8"/></svg></div>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <script src="/assets/js/jquery.min.js"></script>
  <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="/assets/js/popper.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/jquery.easing.1.3.js"></script>
  <script src="/assets/js/jquery.waypoints.min.js"></script>
  <script src="/assets/js/jquery.stellar.min.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="/assets/js/aos.js"></script>
  <script src="/assets/js/jquery.animateNumber.min.js"></script>
  <script src="/assets/js/bootstrap-datepicker.js"></script>
  <script src="/assets/js/jquery.timepicker.min.js"></script>
  <script src="/assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="/assets/js/google-map.js"></script>
  <script src="/assets/js/main.js"></script>
    
  </body>
</html>