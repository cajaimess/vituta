
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
        <form id="form" action="<?= CAMBIO_CONTRASEÑA['url'] ?>" method="POST">
            <input type="hidden" name="correo" value="<?= $correo ?>"/>
            <label>Ingrese su nueva Contraseña</label>
            <input type="password" name="nuevaContraseña" id="nuevaContraseña" required/>
            <label>Verifique la contraseña</label>
            <input type="password" name="confirmarContraseña" id="confirmarContraseña" required/>
            <input id="btn" type="submit" value="cambiar Contraseña"/>
            <div id="mensaje"></div>
        </form>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            var opcion = false;
            function validarContrasenia() {
                var mensaje = $('#mensaje');
                var contraseña = $('#nuevaContraseña').val();
                var contraseñaConfirmacion = $('#confirmarContraseña').val();
                if (contraseña !== contraseñaConfirmacion) {
                    mensaje.html("Las contraseñas no coinciden");
                    opcion = false;
                    return false;
                }
                if (contraseña == '' || contraseñaConfirmacion == '') {
                    mensaje.html("Campos incompletos");
                    opcion = false;
                    return false;
                }
                else {
                    opcion = true;
                    if (opcion == true) {
                        $("#form").submit();
                    }
                }
            }
            $('#btn').on('click', function (e) {
                e.preventDefault();
                validarContrasenia();
            });

        </script>
    </body>
</html>