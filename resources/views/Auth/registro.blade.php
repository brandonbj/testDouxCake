

<section class="home-about-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      
<!-- Inicio de Formulario de Registro--> <section class="post-content-area single-post-area" style="background-color: transparent;">    
    <h1>
      <h2>&nbsp;</h2>
        <div>
            <h1><img src="images/registro.gif"></h1>
            <p>&nbsp;</p>
        </div>
    </h1>
    <!-- tabla registro -->
        <header>
            <p id=datos>Datos Personales</p>
        </header>
        <div class="container">
            <form action="{{route('registro')}}" class="container" id="needs-validation" novalidate method="post">
               {{ csrf_field()}}
                <div class="row">
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
                    <div class="col-md-2 mb-3">
                        <label>Cidudad:</label>
                      <div>
                            <select class="form-control {{ $errors->has('ciudad') ? 'alert-danger' : '' }}" name="ciudad" id="ciudad">
                              <option value="">Seleccione una Ciudad</option>
                              @foreach ($ciudades as $ciudad)
                              <option value="{{$ciudad->id}}" @if ($registros && $registro->ciudad==$ciudad->id) selected @endif>{{$ciudad->ciudad}}</option>
                              @endforeach
                            </select>
                            @if ($errors->has('ciudad'))
                              <p class="{{ $errors->has('ciudad') ? 'text-danger' : ''}} ">{{ $errors->first('ciudad') }}</p>
                            @endif
                    </div>
                    </div>
                   
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Nombre</label>
                        <input type="text" class="input {{$errors-has('nombre') ? 'is_danger' : '' }}" id="nom" name="nom" maxlength="40" placeholder="Nombre(s)" value="{{ old('nombre')}}" required>
                        @if($errors-has('nombre'))
                        <p class="help is_danger">{{$errors-first('nombre')}}</p>
                        @endif
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Apellido Paterno</label>
                        <input type="text" class="input {{ $errors->has('app') ? 'is_danger' : ''}}" id="app" name="app" maxlength="40" placeholder="Apellido Paterno" value="{{ old('app') }}" required>
                        
                           @if($errors-has('nombre'))
                        <p class="help is_danger">{{$errors-first('nombre')}}</p>
                        @endif
                        
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Apellido Materno</label>
                        <input type="text" class="input {{ $errors->has('apm') ? 'is_danger' : '' }}" id="apm" name="apm" maxlength="40" placeholder="Apellido Materno" value="{{ old('apm')}}" required>
                        <div>
                    @if ($errors->has('apm'))
                    <p class="help is-danger">{{ $errors->first('apm') }}</p>
                      @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="10"pattern="[0-9]{10}" placeholder="No de tele. 10 digitos"  value="" required>
                        <div class="invalid-feedback">
                            Ingrese su teléfono
                        </div>
                    </div>
                
                <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Usuario</label>
                        <input type="text" class="input {{ $errors->has('nick_name) ? 'is-danger' : '' }}" id="nickname" name="nickname" maxlength="40" placeholder="Nombre de usuario" value="{{ old('nick_name')}}" required>
                        <div>
                           @if ($errors->has('username'))
                    <p class="help is-danger">{{ $errors->first('username') }}</p>
                      @endif
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Contraseña</label>
                        <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" id="pass1" name="pass1" maxlength="40" placeholder="Contraseña" value="" required>
                        <div>
                        @if ($errors->has('password'))
                          <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Repetir Contraseña</label>
                        <input type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" id="pass2" name="pass2" maxlength="40" placeholder="Confirma Contraseña" value="" required>
                        <div>
                        @if ($errors->has('password'))
                          <p class="help is-danger">{{ $errors->first('password') }}</p>
                        @endif  
                        </div>
                    

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Correo</label>
                        <input type="email" class="input {{ $errors->has('email') ? 'is-danger' : ''" id="correo" name="correo" maxlength="40" placeholder="Correo@ejemplo.com"  required>
                        <div class="invalid-feedback">
                        @if ($errors->has('email'))
                          <p class="help is-danger">{{ $errors->first('email') }}</p>
                        @endif 
                        </div>
                    </div>
                </div>

                <header>
                    <p id=datos>Dirección</p>
                </header>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom03">Calle</label>
                        <input type="text" class="input {{ $errors->has('calle') ? 'is-danger' : ''" id="calle" name="calle" maxlength="30" placeholder="Calle" required>
                        <div class="invalid-feedback">
                            @if ($errors->has('email'))
                          <p class="help is-danger">{{ $errors->first('calle') }}</p>
                        @endif
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Número Interior</label>
                        <input type="tel" class="input {{ $errors->has('num_int') ? 'is-danger' : ''" id="numExt" name="numExt" maxlength="5" placeholder="(Opcional)">
                        @if ($errors->has('num_int'))
                          <p class="help is-danger">{{ $errors->first('num_int') }}</p>
                        @endif
                    </div>
                    
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Número Exterior</label>
                        <input type="tel" class="input {{ $errors->has('num_ext') ? 'is-danger' : ''" id="numInt" name="numInt"placeholder="NumExterior" maxlength="5" required >
                        <div class="invalid-feedback">
                            @if ($errors->has('num_ext'))
                          <p class="help is-danger">{{ $errors->first('num_ext') }}</p>
                        @endif
                        </div>
                    </div>
                    
                  <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Colonia</label>
                        <input type="text" class="input {{ $errors->has('colonia') ? 'is-danger' : ''" id="colonia" name="colonia" maxlength="30" placeholder="Colonia" required>
                        <div class="invalid-feedback">
                            @if ($errors->has('colonia'))
                          <p class="help is-danger">{{ $errors->first('colonia') }}</p>
                        @endif
                        </div>
                    
                    </div>
                </div>
                <div class="row">
                <div class="col-md-2 mb-3">
                        <label for="validationCustom05">CP</label>
                        <input type="tel" class="input {{ $errors->has('cp') ? 'is-danger' : ''" id="cp" name="cp" placeholder="CP" maxlength="5" pattern="[0-9]{5}" required>
                        <div class="invalid-feedback">
                            @if ($errors->has('cp'))
                          <p class="help is-danger">{{ $errors->first('cp') }}</p>
                        @endif
                        </div>
                </div>
                    
                </div>
                <button class="btn btn-danger" type="submit">Resgistrarse</button>
            </form>
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

        </div>
    
    <p>&nbsp;</p>
        </div></div></div></div>
        </section></div></div></div></section>
</html>  
