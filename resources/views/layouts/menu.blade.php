<header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row">
				  			<div class="col-lg-4 col-sm-6 col-4 header-top-left no-padding">
					      	<div class="menu-social-icons">
								<a href="https://www.facebook.com/pages/Cherry-Cake/1454400394874621?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a>
								<a href="https://twitter.com/cherry_dayas" target="_blank"><i class="fa fa-twitter"></i></a>
								<a href="" target="_blank"><i class="fa fa-instagram"></i></a>
							</div>				  						    				  					
				  			</div>
              	    
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
				  				<a href="{{route('index')}}"><img src="images/logo.png" alt="Image" width="50" height="30" /></a>		
				  			</div>
				  			
				  		</div>			  					
		  			</div>
          </div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    				
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  @if(Auth::guest())
							  <li  id="iniciarSesion">
                                <a class="nav-link" href="{{route('login')}}"><img src="images/MENU/INICIARSESION.png" alt="" width="100" height="35"></a>
                              </li>
							  <li  id="registro">
                                <a class="nav-link" href="{{route('register')}}"><img src="images/MENU/REGISTRO.png" alt="" width="100" height="35"></a>
                              </li>
							  @else
							  <li class="menu-active"><a href="{{route('bienvenidos.index')}}"><img src="images/MENU/INICIO.png" alt="" width="100" height="35"></a>
							  </li>
							  <li><a href="{{route('galeria.index')}}"><img src="images/MENU/GALERIA.png" alt="" width="100" height="35"></a>
							  </li>
							  <li class="menu-active"><a href="{{route('contactanos.index')}}"><img src="images/MENU/CONTACTANOS.png" alt="" width="100" height="35"></a>
							  </li>					  	      
							  <li><a href="{{route('conocenos.index')}}"><img src="images/MENU/CONOCENOS.png" alt="" width="100" height="35"></a>
							  </li>
							  <li class="menu-active">
							    <a class="nav-link" href="{{route('pedido.index')}}">CARRITO<span class="badge badge-danger">{{Cart::content()->count()}}</span></a>
							  </li>
							  <li class="menu-has-children">
                               <a  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->nickname }} <span class="caret"></span></a>
                                <ul>
							      <li>
                             <!--   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">-->
							    <a  class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <img src="images/MENU/CERRARSESION.png" alt="" width="100" height="35"></a>
							  <form id="logout-form" action="{{route('logout')}}" method="POST">
							       @csrf
							  </form>
                               <!-- </div>-->
                                </li>
                                </ul>
                                 
                                
							  </li>
							  @endif
							</ul>
							
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  
