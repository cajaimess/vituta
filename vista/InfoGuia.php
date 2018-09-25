<?php
if ($_SESSION['rol'] === 'administrador') {
    ?><!DOCTYPE html>
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
            <h1>Esto aún no sirve</h1>
            <table>
                <tr>
                    <td>Precio Guía</td>
                </tr>
                <?php foreach ($consultaGuia as $value) { ?>
                    <tr>
                        <td><?= $value->valor_guia ?></td>
                    <td><input type="submit" name="" id="" value="bla"></td>
                    </tr>
                <?php } ?>
            </table>
            <table>
                <tr>
                    <td>Precio Seguro</td>
                </tr>
                <?php foreach ($consultaSeguro as $value) { ?>
                    <tr>
                        <td><?= $value->valor_seguro ?></td>
                    <td><input type="submit" name="" id="" value="bla"></td>
                    </tr>
                <?php } ?>
            </table>
            <h1>Hasta acá</h1>
            <label>Nuevo Precio Guia</label>
            <input type="number" name="precioGuia" id="precioGuia"/>
            <label>Nuevo Precio Seguro</label>
            <input type="number" name="precioSeguro" id="precioSeguro"/>
            <div id="mensaje"></div>
            <input name="btn"  value="registrar información" type="submit" id="btn"/>
            <!--</form>-->
            <div id="mensaje">

            </div>
        </body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
            var opcion = false;
            function validarReservaPredeterminado() {
                var mensaje = $('#mensaje');
                var precioGuia = $('#precioGuia').val();
                var precioSeguro = $('#precioSeguro').val();
                if (precioGuia <= 0) {
                    mensaje.html("cantidad invalida");
                    opcion = true;
                    return false;
                } else if (precioSeguro <= 0) {
                    mensaje.html("cantidad invalida");
                    opcion = true;
                    return false;
                } else {
                    $.ajax({
                        type: 'POST',
                        async: false,
                        data: {'precioGuia': precioGuia, 'precioSeguro': precioSeguro},
                        url: '<?= INSERTAR_GUIA_SEGURO['url'] ?>',
                        success: function (data) {
                            alert("registrado correctamente");
                        }
                    });
                }
            }
            $('#btn').on('click', function (e) {
                e.preventDefault();
                validarReservaPredeterminado();
            });

        </script>
    </html>
    <?php
} else if ($_SESSION['rol'] == 'usuario') {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaUsuario.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>