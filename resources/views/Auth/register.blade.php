@extends('base')
@section('title', 'Registro')
@section('content')
<section class="home-about-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      
<!-- Inicio de Formulario de Registro--> <section class="post-content-area single-post-area" style="background-color: transparent;">    
        <div>
            <h1><img src="images/registro.gif"></h1>
            <p>&nbsp;</p>
        </div>
                <div class="container">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @error('nombre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="app" class="col-md-4 col-form-label text-md-right">{{ __('Apelldo Paterno') }}</label>

                            <div class="col-md-6">
                                <input id="app" type="text" class="form-control @error('app') is-invalid @enderror" name="app" value="{{ old('app') }}" required >

                                @error('app')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    <div class="form-group row">
                            <label for="apm" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>

                            <div class="col-md-6">
                                <input id="apm" type="text" class="form-control @error('apm') is-invalid @enderror" name="apm" value="{{ old('apm') }}" required>

                                @error('apm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nickname" class="col-md-4 col-form-label text-md-right">{{ __('Nickname') }}</label>

                            <div class="col-md-6">
                                <input id="nickname" type="nickname" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required>

                                @error('nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" required >

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        
                        
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-lg-right">{{ __('Dirección') }}</label>  
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Ciudad') }}</label>  
                              <div class="col-md-6">
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
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Alcaldia') }}</label>  
                              <div class="col-md-6">
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
                        <div class="form-group row">
                            <label for="calle" class="col-md-4 col-form-label text-md-right">{{ __('Calle') }}</label>

                            <div class="col-md-6">
                                <input id="calle" type="text" class="form-control @error('calle') is-invalid @enderror" name="calle" value="{{ old('calle') }}" required>

                                @error('calle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="num_ext" class="col-md-4 col-form-label text-md-right">{{ __('Número Exterior') }}</label>

                            <div class="col-md-6">
                                <input id="num_ext" type="text" class="form-control @error('num_ext') is-invalid @enderror" name="num_ext" value="{{ old('num_ext') }}" required>

                                @error('num_ext')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="num_int" class="col-md-4 col-form-label text-md-right">{{ __('Número Interior') }}</label>

                            <div class="col-md-6">
                                <input id="num_int" type="text" class="form-control @error('num_int') is-invalid @enderror" name="num_int" value="{{ old('num_int') }}" required>

                                @error('num_int')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="colonia" class="col-md-4 col-form-label text-md-right">{{ __('Colonia') }}</label>

                            <div class="col-md-6">
                                <input id="colonia" type="text" class="form-control @error('colonia') is-invalid @enderror" name="colonia" value="{{ old('colonia') }}" required>

                                @error('colonia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        
                        <div class="form-group row">
                            <label for="cp" class="col-md-4 col-form-label text-md-right">{{ __('Código Postal') }}</label>

                            <div class="col-md-6">
                                <input id="cp" type="text" maxlength="5" class="form-control @error('cp') is-invalid @enderror" name="cp" value="{{ old('cp') }}" required>

                                @error('cp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-md-6  offset-md-4 form-check">
                                  
                                  <input class="form-check-input" type="checkbox" id="aviso_privacidad" value="true" required>
                                  <a href="#" for="form-check-a">{{ __('Acepto el aviso de privacidad') }}</a>
                            </div>
                         </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button id="btnini" type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
          </section>
            </div>
        </div>
    </div>
</section>
@endsection
