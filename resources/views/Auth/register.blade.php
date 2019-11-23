@extends('base')
@section('title', 'Inicio de Sesión')
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
                <div class="container">{{ __('Register') }}

                <div class="container">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        
                      <div class="col-md-2 mb-3">
                        <label>Alcaldia:</label>
                      <div>
                            <select class="form-control {{ $errors->has('alcaldia') ? 'alert-danger' : '' }}" name="nombre_cliente" id="areas">
                              <option value="">Seleccione una Alcaldía</option>
                              @foreach ($alcaldias as $alcaldia)
                              <option value="{{$alcaldia->id}}" @if ($registros && $registro->alcaldia==$alcaldia->id) selected @endif>{{$alcaldia->alcaldia}}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('alcaldia'))
                              <p class="{{ $errors->has('alcaldia') ? 'text-danger' : ''}} ">{{ $errors->first('alcaldia') }}</p>
                            @endif
                    </div>
                    </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="btnini" type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
