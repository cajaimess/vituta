<!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    --><?php
    session_abort();
    session_start();
    if (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == 'usuario') {
            include_once './vista/MenuVitutaUsuario.php';
            return;
        } else if ($_SESSION['rol'] == 'administrador') {
            include_once './vista/MenuVitutaAdministrador.php';
            return;
        }
    } else {
        ?>
        <html>
            <head>
                <meta charset="UTF-8">
                <title>Vituta</title>
                <script type="text/javascript" src="<?= CARPETA_RECURSOS ?>js/jquery-3.3.1.min.js"></script>
                <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />
                <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
                <link href="<?= CARPETA_RECURSOS ?>fonts/style.css" rel="stylesheet" type="text/css"/>
                <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/nprogress/nprogress.css" rel="stylesheet" type="text/css"/>
                <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/animate.min.css" rel="stylesheet" type="text/css"/>
                <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/build/css/custom.min.css" rel="stylesheet" type="text/css"/>

            </head>

            <body class="login">
                <div>
                    <a class="hiddenanchor" id="signup"></a>
                    <a class="hiddenanchor" id="signin"></a>

                    <div class="login_wrapper">
                        <div class="animate form login_form">
                            <section class="login_content">
                                <form class="login" action="<?= USUARIO_AUTENTICAR['url'] ?>" method="POST">
                                    <h1>Iniciar Sesión</h1>
                                    <div class="col-md-10col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="usu_correo">Ingrese Correo</label>
                                        <input type="email" name="usu_correo" class="form-control has-feedback-left " id="usu_correo" placeholder="Email">
                                        <span class="icon icon-email form-control-feedback left" aria-hidden="true"></span>


                                    </div>
                                    <div class="col-md-10col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="usu_clave">Ingrese Contraseña</label>
                                        <input type="password" name="usu_clave" class="form-control has-feedback-left" id="usu_clave" placeholder="Contraseña">
                                        <span class="fa fa-key form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div>
                                        <input type="submit" value="iniciar sesion" class="btn btn-primary"/>
                                        <a class="reset_pass" href="<?= USUARIO_RECUPERAR['url'] ?>">Olvidaste tu contraseña?</a>

                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="separator">
                                        <p class="change_link">Queremos saber mas de ti!
                                            <a href="#signup" class="to_register"> Registrate </a>
                                        </p>

                                        <div class="clearfix"></div>
                                        <br />

                                        <div>
                                            <h1><i class="icon icon-paper-plane"></i> Vituta!<br><small>Gestor Turistico</small></h1>
                                            <p>©2019 Viva una gran experencia recorriendo Guatavita y sus paisajes</p>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>

                        <div id="register" class="animate form registration_form ">
                            <section class="login_content">

                                <h1>Registro</h1>
                                <div id="mensaje"></div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_nombre">Nombre</label>
                                    <input type="text" id="usu_nombre" name="usu_nombre" class="form-control has-feedback-left" placeholder="Nombre" />
                                    <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_apellido">Apellido</label>
                                    <input type="text" id="usu_apellido" name="usu_apellido" class="form-control" placeholder="Apellido" />
                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_tipo_documento">Tipo Documento</label>
                                    <select name="usu_tipo_documento" id="usu_tipo_documento" class="form-control has-feedback-left" >
                                        <option >Cedula de ciudadania</option> 
                                        <option >Pasaporte</option> 
                                        <option>Cedula Extranjeria</option>
                                    </select>
                                    <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_numero_documento">Numero de Documento</label>
                                    <input type="text" id="usu_numero_documento" name="usu_numero_documento" class="form-control" placeholder="Numero documento"/>
                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_genero">Genero</label>
                                    <select name="usu_genero" id="usu_genero" required class="form-control has-feedback-left">
                                        <option>Femenino</option> 
                                        <option>Masculino</option> 
                                    </select>
                                    <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_telefono">Télefono</label>
                                    <input type="number" id="usu_telefono" name="usu_telefono"  min="0" class="form-control" placeholder="Telefono" />
                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_correo">Correo Electronico</label>
                                    <input type="email" id="usu_correo_r" name="usu_correo_r" class="form-control has-feedback-left" placeholder="Correo"/>
                                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_correoConfirmacion">Confirmación de correo</label>
                                    <input type="email" id="usu_correoConfirmacion" name="usu_correoConfirmacion" class="form-control" placeholder="Confirmación Correo" />
                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_clave">Clave</label>
                                    <input type="password" id="usu_clave_r" name="usu_clave_r" class="form-control has-feedback-left" placeholder="Clave"/>
                                    <span class="fa fa-dollar form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="usu_claveConfirmacion">Confirmación de clave</label>
                                    <input type="password" id="usu_claveConfirmacion" name="usu_claveConfirmacion" class="form-control" placeholder="Confirmación Clave"/>
                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                        <input type="submit" id="btn" class="btn btn-primary" name="btn" value="Registrar">
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="separator">
                                    <p class="change_link">Already a member ?
                                        <a href="#signin" class="to_register"> Iniciar sesion </a>
                                    </p>

                                    <div class="clearfix"></div>
                                    <br />

                                    <div>
                                        <h1><i class="icon icon-paper-plane"></i> Vituta!<br><small>Gestor Turistico</small></h1>
                                        <p>©2019 Viva una gran experencia recorriendo Guatavita y sus paisajes</p>
                                    </div>
                                </div>

                            </section>
                        </div>
                    </div>
                </div>
                <script>
        //                var respuesta = "";
        //                function consultarReservas() {
        //                    $.ajax({
        //                        type: 'POST',
        //                        async: false,
        //                        data: 'id_reserva=' + idReserva,
        //                        url: '<?= CONSULTAR_RESERVAS_USUARIO['url'] ?>',
        //                        success: function (data) {
        //                            respuesta = JSON.parse(data);
        //                        }
        //                    });
        //                }
                    function Registro() {
                        var mensaje = $('#mensaje');
                        var usu_nombre = $('#usu_nombre').val();
                        if (usu_nombre === '') {
                            mensaje.html('Debe ingresar el nombre');
                            return;
                        }

                        var usu_apellido = $('#usu_apellido').val();
                        if (usu_apellido === '') {
                            mensaje.html('Debe ingresar el apellido');
                            return;
                        }
                        var usu_tipo_documento = $('#usu_tipo_documento').val();

                        var usu_numero_documento = $('#usu_numero_documento').val();
                        if (usu_numero_documento === '') {
                            mensaje.html('Debe ingresar el numero de documento');
                            return;
                        }
                        if (!(/^\d{10}$/.test(usu_numero_documento))) {
                            mensaje.html('Debe ingresar un numero de documento valido');
                            return;
                        }

                        var usu_genero = $('#usu_genero').val();
                        var usu_telefono = $('#usu_telefono').val();
                        if (usu_telefono === '') {
                            mensaje.html('Debe ingresar el telefono');
                            return;
                        }
                        if (!(/^\d{10}$/.test(usu_telefono))) {
                            mensaje.html('Debe ingresar un numero valido');
                            return;
                        }
                        var usu_correo = $('#usu_correo_r').val();
                        if (usu_correo === '') {
                            mensaje.html('Debe ingresar el correo');
                            return;
                        }
                        if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(usu_correo)) {
                            console.log("bien");

                        } else {
                            mensaje.html('Correo Invalido');
                            return;
                        }

                        var usu_correoConfirmacion = $('#usu_correoConfirmacion').val();
                        if (usu_correoConfirmacion !== usu_correo) {
                            mensaje.html('Los correos no coinciden');
                            return;
                        }
                        var usu_clave = $('#usu_clave_r').val();
                        if (usu_clave === '') {
                            mensaje.html('Debe ingresar la clave');
                            return;
                        }
                        if (/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/.test(usu_clave)) {
                            console.log("bien");

                        } else {
                            mensaje.html('Clave Invalida debe contener minimos 8 caracteres 1 mayuscula 1 caracter especial');
                            return;
                        }

                        var usu_claveConfirmacion = $('#usu_claveConfirmacion').val();
                        if (usu_claveConfirmacion !== usu_clave) {
                            mensaje.html('Las claves no coinciden');
                            return;
                        }

                        $.ajax({
                            'url': '<?= USUARIO_GUARDAR['url'] ?>',
                            'type': 'POST',
                            'data': {'usu_nombre': usu_nombre, 'usu_apellido': usu_apellido, 'usu_tipo_documento': usu_tipo_documento,
                                'usu_numero_documento': usu_numero_documento, 'usu_genero': usu_genero, 'usu_telefono': usu_telefono,
                                'usu_correo': usu_correo, 'usu_clave': usu_clave},
                            'success': function (respuesta) {

                                document.location.href = '<?= INICIO_SESION['url'] ?>';

                            }

                        });

                    }
                    $('#btn').on('click', function (e) {
                        e.preventDefault();
                        Registro();
                    });
                </script>

            </body>
        </html>
        <?php
    }
    ?>