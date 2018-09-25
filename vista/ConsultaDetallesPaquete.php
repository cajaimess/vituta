<?php
if ($_SESSION['rol'] == 'administrador') {
    ?> 
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Paquete predeterminado</title>

        </head>
        <body>
            
            <form action="" method="POST">
                <div align="center">
                    <?php foreach ($listaa as $obj) { ?>

                        <h3> <?= $obj->nombre_paquete ?>    </h3>
                    <?php } ?>

                    <img src="<?= CARPETA_ARCHIVOS . '/GuatavitaNatural.jpg' ?>" width="250"/><br>
                    <span style="font-weight:bold">Actividades de el paquete</span><br>     
                    <?php foreach ($lista as $obj) { ?>   
                        <span style="font-weight:bold">Nombre Actividad:</span><br>  <?= $obj->nombre_actividad ?><br></td>
                        <span style="font-weight:bold">Duraciòn Aproximada:</span><br>  <?= $obj->duracion_aproximada ?><br></td>
                        <span style="font-weight:bold">Recomendación:</span><br>  <?= $obj->recomendacion ?><br></td>
                        <span style="font-weight:bold">Categoria:</span><br>  <?= $obj->categoria ?><br></td>
                        <span style="font-weight:bold">Descripción:</span><br>  <?= $obj->descripcion ?><br></td>
                        <span style="font-weight:bold">Edad Recomedada:</span><br>  <?= $obj->edad_recomendada ?><br></td>

                    <?php } ?>    
                    <?php foreach ($listaa as $obj) { ?>

                        <span style="font-weight:bold">Precio Paquete por persona:</span><br>  <?= $obj->precio_persona ?><br></td>

                    <?php } ?>
                </div > 



                <input type="button" onclick="history.back()" name="Volver atrás" value="Volver atrás">
                <div align="right"> <input type="button" onclick="history.back()" name="Reservar" value="Reservar"></div>


            </form>
            <script>
                function consultar() {
                    $.ajax({
                        'url': '<?= DETALLES_PAQUETE['url'] ?>',
                        'type': 'POST',
                        'data': {},
                        success: function (respuesta) {

                            var cuerpo = $('#cuerpo');//tabla-tbody
                            cuerpo.empty();
                            for (var i = 0; i < respuesta.length; i++) {
                                var item = respuesta[i];
                                var fila = "<tr>";
                                fila += "<td>" + item.nombre_paquete + "</td>" + "<td>" + item.precio_persona + "</td>";
                                fila += "<td> <input class='modificar' data-info='" + JSON.stringify(item) + "'  type='button' value='modificar'/></td>";
                                fila += "<td> <input class='btnEliminar' data-id='" + item.id_paquete_predeterminado + "'  type='button' value='eliminar'/></td></tr>";
                                cuerpo.append(fila);
                            }
                        }
                    }
                }

            </script>
        </body>
    </html>
    <?php
} else if ($_SESSION['rol'] == 'usuario') {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaUsuario.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?> 
