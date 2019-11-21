<?php
include 'global/config.php';
include 'global/conexion.php';
include 'includes/carrito.php';
include 'templetes/cabecera.php';
?>

<div id="body" align="center">
    
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
            <form action="includes/registro.php" class="container" id="needs-validation" novalidate method="post">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Nombre</label>
                        <input type="text" class="form-control" id="nom" name="nom" maxlength="40" placeholder="Nombres" value="" required>
                        <div class="invalid-feedback">
                            Ingrese su Nombre
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Apellido Paterno</label>
                        <input type="text" class="form-control" id="app" name="app" maxlength="40" placeholder="Apellido Paterno" value="" required>
                        <div class="invalid-feedback">
                            Ingrese su Apellido Paterno
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Apellido Materno</label>
                        <input type="text" class="form-control" id="apm" name="apm" maxlength="40" placeholder="Apellido Materno" value="" required>
                        <div class="invalid-feedback">
                            Ingrese su Apellido Materno
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Usuario</label>
                        <input type="text" class="form-control" id="usuario" name="usuario" maxlength="40" placeholder="Nombre de usuario" value="" required>
                        <div class="invalid-feedback">
                            Ingrese el nombre de usuario
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Contraseña</label>
                        <input type="password" class="form-control" id="pass1" name="pass1" maxlength="40" placeholder="Contraseña" value="" required>
                        <div class="invalid-feedback">
                            Ingrese su contraseña
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Repetir Contraseña</label>
                        <input type="password" class="form-control" id="pass2" name="pass2" maxlength="40" placeholder="Contraseña" value="" required>
                        <div class="invalid-feedback">
                            Ingrese de nuevo su contraseña
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom02">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono" name="telefono" maxlength="10"pattern="[0-9]{10}" placeholder="No de tele. 10 digitos"  value="" required>
                        <div class="invalid-feedback">
                            Ingrese su teléfono
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" maxlength="40" placeholder="Correo@ejemplo.com"  required>
                        <div class="invalid-feedback">
                            Ingrese su Correo
                        </div>
                    </div>
                </div>

                <header>
                    <p id=datos>Dirección</p>
                </header>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom03">Calle</label>
                        <input type="text" class="form-control" id="calle" name="calle" maxlength="30" placeholder="Calle" required>
                        <div class="invalid-feedback">
                            Ingresa datos
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Colonia</label>
                        <input type="text" class="form-control" id="colonia" name="colonia" maxlength="30" placeholder="Colonia" required>
                        <div class="invalid-feedback">
                            Ingrese su colonia
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom04">Alcaldía</label>
                        <input type="text" class="form-control" id="alcaldia" name="alcaldia" maxlength="50" placeholder="Alcaldia" required>
                        <div class="invalid-feedback">
                            Ingrese su Alcaldia
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom04">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" maxlength="50" placeholder="Ciudad" required>
                        <div class="invalid-feedback">
                            Ingrese su Ciudad
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-2 mb-3">
                        <label for="validationCustom05">CP</label>
                        <input type="tel" class="form-control" id="cp" name="cp" placeholder="CP" maxlength="5" pattern="[0-9]{5}" required>
                        <div class="invalid-feedback">
                            Ingrese su código postal
                        </div>
                </div>

                <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Número Exterior</label>
                        <input type="tel" class="form-control" id="numInt" name="numInt"placeholder="NumExterior" maxlength="5" required >
                        <div class="invalid-feedback">
                            Ingrese su Número Exterior
                        </div>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="validationCustom05">Número Interior</label>
                        <input type="tel" class="form-control" id="numExt" name="numExt" maxlength="5" placeholder="(Opcional)">
                    </div>
                    
                </div>
                <button class="btn btn-danger" type="submit">Resgistrarse</button>
            </form>
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

        </div>
    
    <p>&nbsp;</p>
</div>

<?php
include 'templetes/pie.php';
?>