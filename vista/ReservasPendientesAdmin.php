<?php
if ($_SESSION['rol'] === "administrador") {
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
            <table>
                <tr>
                    <td>Nombre Paquete</td>
                    <td>Nombre Usuario</td>
                    <td>Cantidad de guías</td>
                    <td>Cantidad de personas</td>
                    <td>Fecha Servicio</td>
                    <td>Valor Total</td>
                </tr>
                <?php foreach ($reservasCreado as $value) { ?>
                    <tr>
                        <td><?= $value->nombre_creado ?></td>
                        <td><?= $value->nombre ?></td>
                        <td><?= $value->cantidad_guias ?></td>
                        <td><?= $value->cantidad_personas ?></td>
                        <td><?= $value->fecha_servicio ?></td>
                        <td><?= $value->valor_total ?></td>
                    </tr>
                <?php } ?>
                <?php foreach ($reservasPredeterminado as $value) { ?>
                    <tr>
                        <td><?= $value->nombre_paquete ?></td>
                        <td><?= $value->nombre ?></td>
                        <td><?= $value->cantidad_guias ?></td>
                        <td><?= $value->cantidad_personas ?></td>
                        <td><?= $value->fecha_servicio ?></td>
                        <td><?= $value->valor_total ?></td>
                    </tr>
                <?php } ?>
            </table>
        </body>
    </html>
    <?php
} else if ($_SESSION['rol'] == "usuario") {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaUsuario.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>