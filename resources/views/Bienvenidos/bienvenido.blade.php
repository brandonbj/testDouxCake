@extends('base')
@section('title', 'Bienvenido')
@section('content')
<section class="home-about-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
<!-- Carrousel -->
         
    <section class="post-content-area single-post-area" style="background-color: transparent;">
              <div class="row">
              <div class="col col-lg-12">
              
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
     <div class="carousel-inner" role="listbox">
      <div class="carousel-item active" style="background-image: url('imgs/1.jpg')">
        <img class="d-block w-100" src="imgs/1.jpg" width="300" height="310" alt="First slide">
      </div>

      <div class="carousel-item active" style="background-image: url('imgs/27.jpg')">
        <img class="d-block w-100" src="imgs/27.jpg" width="300" height="310" alt="Second slide">
      </div>

      <div class="carousel-item active" style="background-image: url('imgs/23.jpg')">
        <img class="d-block w-100" src="imgs/23.jpg" width="300" height="310" alt="Third slide">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Anterior</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Siguiente</span>
        </a>
  </div>
                </div>
     
     
     
     
     
    </div>
  </div>       
</section>
  <!-- Termina Carrousel-->
  
  
                        <div class="row">	
						<div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/pokemon.png" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake infantiles todo tipo
								 de presentación de anime.</h4>
							</a>
                          </div>
                          
                          <div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/personal.png" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake personalizados según
								 al gusto de nuestros clientes.</h4>
							</a>
                          </div>
                          
                          <div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/agri.png" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake agridulce para
								 esas personas aventureras.</h4>
							</a>
                          </div>
      </div>
                       
                       
                        <div class="row">
                         <div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/pie-with-choco.jpg" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake con frutas a elección
								 de nuestros clientes.</h4>
							</a>
                          </div>
                          
                          <div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/salado.png" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake salados pará
								 esas reuniones o antojos.</h4>
							</a>
                          </div>
                          
                          <div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/pizza.png" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake una buena opcion
								 para los fanáticos de la pizza.</h4>
							</a>
                          </div>
      </div>
                          
                          <div class="row">
                          <div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/canela.png" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake de canela para aquellos
								 que el sabor a nuez y canela les facinan.</h4>
							</a>
                          </div>
                          
                          <div class="single-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="images/helado.png" alt="">	
							</div>
							<a href="#">
								<h4>Cupcake con y forma de helado
								 por aquellos que gustan del helado.</h4>
							</a>
                          </div>
      </div>
                 
				<br>    
                    <center> <h3 id="somos"> SOMOS TU MEJOR OPCIÓN. </h3> </center> 
			<p>&nbsp;</p>
		</div>
      </div>
    </div>
       </div>
</section>
@endsection
