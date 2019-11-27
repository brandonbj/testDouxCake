@extends('base')
@section('title', 'Registro')
@section('content')
<section class="home-about-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      
<!-- Inicio de Formulario de Registro-->
        <section class="post-content-area single-post-area" style="background-color: transparent;"> 
        <div class="alert alert-danger" role="alert">
           
        <div>
            <h1><img src="images/registro.gif"></h1>
            <p>&nbsp;</p>
        </div>
                <div class="container-fluid">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                        <div class="col col-md-4">
                            <label for="nombre" class="col-md-6 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="mt-10" >
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus maxlength="30">

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col col-md-4">
                            <label for="app" class="col-md-6 col-form-label text-md-right">{{ __('Apelldo Paterno') }}</label>

                            <div class="mt-10">
                                <input id="app" type="text" class="form-control @error('app') is-invalid @enderror" name="app" value="{{ old('app') }}" required maxlength="20">

                                @error('app')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="col col-md-4">
                            <label for="apm" class="col-md-6 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="mt-10">
                                <input id="apm" type="text" class="form-control @error('apm') is-invalid @enderror" name="apm" value="{{ old('apm') }}" required maxlength="20">

                                @error('apm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                       <!--termina la primera seccion del formulario-->
                       <!--inicia segunda seccion del formulario-->
                       
                       <div class="row">
                        <div class="col col-md-4">
                            <label for="email" class="col-md-6 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="mt-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required maxlength="80">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col col-md-4">
                            <label for="nickname" class="col-md-6 col-form-label text-md-right">{{ __('Nickname') }}</label>

                            <div class="mt-10">
                                <input id="nickname" type="nickname" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required maxlength="20">

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col col-md-4">
                            <label for="password" class="col-md-6 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="mt-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required maxlength="16" min="8">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                       <!--termina la segunda seccion del formulario-->
                       
                       <!--inicia la tercera seccion del formulario-->
                       
                       
                       <div class="row">
                        <div class="col col-md-4">
                            <label for="password-confirm" class="col-md-6 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="mt-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required maxlength="16" min="8">
                            </div>
                        </div>
                        
                        <div class="col col-md-4">
                            <label for="telefono" class="col-md-6 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="mt-10">
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required maxlength="15" min="10">

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                        <!--termina la tercera seccion-->
                        
                        <!--inicia la cuarta seccion-->
                        <div class="col col-md-4">
                            <label class="col-md-4 col-form-label text-lg-right">{{ __('Dirección') }}</label>  
                        </div>
                        <div class="row">
                        <div class="col col-md-4">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Ciudad') }}</label>  
                              <div class="mb-30" class="default-select" id="default-select">
                                <select class="form-control {{ $errors->has('ciudad') ? 'alert-danger' : '' }}" name="ciudad" id="ciudad" required>
                                    <option value="">Seleccione una ciudad</option>
                                    @foreach ($ciudades as $ciudad)
                                    <option value="{{$ciudad->id}}" @if ($ciudades && $ciudad->ciudad==$ciudad->id) selected @endif>{{$ciudad->ciudad}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('ciudad'))
                                  <p class="{{ $errors->has('ciudad') ? 'text-danger' : ''}} ">{{ $errors->first('ciudad') }}</p>
                                @endif
                              </div>
                        </div>
                        <div class="col col-md-4">
                            <label for="name" class="col-md-6 col-form-label text-md-right">{{ __('Alcaldia') }}</label>  
                              <div class="mb-30">
                                <select class="form-control {{ $errors->has('alcaldia') ? 'alert-danger' : '' }}" name="alcaldia" id="alcaldia" required>
                                    <option value="">Seleccione una Alcaldía</option>
                                    @foreach ($alcaldias as $alcaldia)
                                    <option value="{{$alcaldia->id}}" @if ($alcaldias && $alcaldia->alcaldia==$alcaldia->id) selected @endif>{{$alcaldia->alcaldia}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('alcaldia'))
                                  <p class="{{ $errors->has('alcaldia') ? 'text-danger' : ''}} ">{{ $errors->first('alcaldia') }}</p>
                                @endif
                              </div>
                        </div>
                        <div class="col col-md-4">
                            <label for="calle" class="col-md-6 col-form-label text-md-right">{{ __('Calle') }}</label>

                            <div class="mt-10">
                                <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}" required maxlength="40">

                                @error('calle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>
                       <!--termina la cuarta seccion-->
                       
                       <!--inicia la quinta seccion--> 
                        
                        <div class="row">
                        <div class="col col-md-4">
                            <label for="num_ext" class="col-md-6 col-form-label text-md-right">{{ __('Número Exterior') }}</label>

                            <div class="mt-10">
                                <input id="num_ext" type="text" class="form-control @error('num_ext') is-invalid @enderror" name="num_ext" value="{{ old('num_ext') }}" required maxlength="5">

                                @error('num_ext')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col col-md-4">
                            <label for="num_int" class="col-md-6 col-form-label text-md-right">{{ __('Número Interior') }}</label>

                            <div class="mt-10">
                                <input id="num_int" type="text" class="form-control @error('num_int') is-invalid @enderror" name="num_int" value="{{ old('num_int') }}" required maxlength="5">

                                @error('num_int')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        <div class="col col-md-4">
                            <label for="colonia" class="col-md-6 col-form-label text-md-right">{{ __('Colonia') }}</label>

                            <div class="mt-10">
                                <input id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{ old('colonia') }}" required maxlength="80">

                                @error('colonia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                      </div>                        
                      <!--termina la quinta seccion-->
                      
                      <!--inicia sexta seccion-->
                       
                        <div class="row">
                        <div class="col col-md-4">
                            <label for="cp" class="col-md-6 col-form-label text-md-right">{{ __('Código Postal') }}</label>

                            <div class="mt-10">
                                <input id="cp" type="text" maxlength="5" class="form-control @error('cp') is-invalid @enderror" name="cp" value="{{ old('cp') }}" required>

                                @error('cp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="col col-md-4">
                          <label for="cp" class="col-md-6 col-form-label text-md-right"></label>
                           
                            <div class="col-md-6 form-check">
                                  <input class="form-check-input" type="checkbox" id="aviso_privacidad" value="true" required>
                                  <a href="#" for="form-check-a">{{ __('Acepto el aviso de privacidad') }}</a>
                            </div>
                         </div>
                         
                      </div>
                         <!--termina la sexta seccion-->
                         
                        
                        <div class="row">
                            <div class="col col-md-12" style="text-align: center">
                                <button id="btnini" type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                      
                
              </form>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
@endsection
