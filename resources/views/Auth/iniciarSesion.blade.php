@extends('base')
@section('title', 'Inicio Sesion')
@section('content')
<section class="home-about-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
<!-- Seccion Inicio de Sesion-->
<section class="post-content-area single-post-area" style="background-color: transparent;">  
        
   
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">
            <br>
            <div>
                <h1><img src="Imagenes GIF/INICAR-SESION-MOVIMIENTO.gif" width="292" height="254"></h1>
            </div>
        </h4>
        <h1>Iniciar Sesión</h1>
        <div  align="center">
            <form  class="container" action="{{ route('login') }}" id="needs-validation" method="post" novalidate>
                {{ csrf_field() }}
                <div>
                    <div class="col-md-4 mb-3">
                        <label for="inputUser">Usuario</label>
                        <input type="text" class="input100 text-white  {{ $errors->has('email') ? 'is-danger' : '' }}"  name="user" placeholder="Ingrese su usuario" required value="{{ old('email') }}">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
            @if ($errors->has('email'))
              <p class="text-white">{{ $errors->first('email') }}</p>
            @endif
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="inputPass">Contraseña</label>
                        <input type="password" class="input100 text-white {{ $errors->has('password') ? 'is-danger' : '' }}" name="pass" placeholder="Ingrese su contraseña" required value="{{ old('password') }}">
                        <div class="invalid-feedback">
                            Ingrese su contraseña
                        </div>
                        <br>
                        <small id="mensajePassword" class="form-text text-muted">No compartas tú contraseña con nadie...</small>
                        <br>
                        <button class="btn btn-danger" type="submit">Iniciar Sesión</button>
                        <br>
                        <h1><center>o</center></h1>
                    </div>
            </form>
            <div>
                <button class="btn btn-link" ><a href="registro.php">Registrarse</a></button>
            </div>
            
        </div>

    </div>
    @section('extra-js')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';

            window.addEventListener('load', function() {
                var form = document.getElementById('needs-validation');
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            }, false);
        })();
    </script>
@endsection