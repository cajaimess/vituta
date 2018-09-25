
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>
        </head>
        <body>
            <form id="form" action="<?= USUARIO_ENVIAR_CORREO['url'] ?>" method="POST">
                <label>Escriba su correo electrónico</label>
                <input type="email" name="correo" id="correo"/>
                <div id="mensaje" ></div>
                <input id="btn" type="submit" value="enviarCorreo"/>
            </form>
            <a href="<?= INICIO_SESION['url'] ?>">Volver al inicio de Sesión</a>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                var opcion = false;
                function correoRecuperacion() {
                    var opcion = false;
                    var mensaje = $('#mensaje');
                    var correo = $('#correo').val();
                    if (correo === '') {
                        mensaje.html('Debe ingresar el correo');
                        opcion = false;
                        return false;
                    }
                    if (/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i.test(correo)) {
                        opcion = true;
                    } else {
                        mensaje.html('Porfavor ingrese un correo válido');
                        opcion = false;
                        return false;
                    }
                    if (opcion === true) {
                        $.ajax({
                            'url': '<?= USUARIO_ENVIAR_CORREO['url'] ?>',
                            'type': 'POST',
                            'data': {'correo': correo},
                            'success': function (respuesta) {
                                if (respuesta === '1') {
                                    mensaje.html("El correo ha sido envíado");
                                } else {
                                    mensaje.html('Este correo no está vinculado con ninguno de nuestros usuarios');
                                }

                            }

                        });
    //                    $("#form").submit();
                    }
                }
                $('#btn').on('click', function (e) {
                    e.preventDefault();
                    correoRecuperacion();
                });

            </script>
        </body>
    </html>
 