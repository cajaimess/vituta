<?php
if ($_SESSION['rol'] === 'usuario') {
    ?><!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />

        </head>
        <body>
            <div class="page-title">
                <div class="title_left">
                    <h3>Destinos <small>Informacion de destinos</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-6 col-xs-12">
                    <div class="dashboard_graph">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Destinos <small>Selecciona tu destino</small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped jambo_table bulk_action">
                                        <thead>
                                            <tr>
                                             <th><h4>Nombre</h4></th>
                                             <th><h4>Precio</h4></th>
                                             <th><h4>Detalles</h4></th>

                                        </tr>
                                        </thead>
                                        <tbody id="cuerpo">

                                        <div id="foto">

                                        </div>
                                        </tbody>
                                    </table>
                                </div>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>




                                        </tr>
                                    </thead>

                                </table>

                        <!--                                    <input type="button" onclick="history.back()" class="btn btn-success" name="volver atrás" value="Volver atrás">-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div id="foto">

        </div>



        <script type="text/javascript">
            consultar();
            function consultar() {
                $.ajax({
                    'url': '<?= CONSULTAR_PREDETERMINADO['url'] ?>',
                    'type': 'POST',
                    'data': {},
                    success: function (respuesta) {

                        var cuerpo = $('#cuerpo');//tabla-tbody
                        cuerpo.empty();
                        for (var i = 0; i < respuesta.length; i++) {
                            var item = respuesta[i];
                            var fila = "<tr>";
                            fila += "<td>" + item.nombre_paquete + "</td>" + "<td>" + item.precio_persona + "</td>";
                            fila += "<input class='info' data-info='" + JSON.stringify(item) + "'  type='hidden' value='modificar'/>";
                            fila += "<td> <input class='btnVerdetalles btn btn-success' data-id='" + item.id_paquete_predeterminado + "'  type='button' value='Ver detalles'/></td></tr>";
                            cuerpo.append(fila);
                        }


                        $('tbody input.btnVerdetalles').on('click', function (e) {
                            var id = $(this).attr('data-id');
                            var foto = $('#foto');
                            $.ajax({
                                'url': '<?= DETALLES_PAQUETE['url'] ?>',
                                'type': 'POST',
                                'data': {'id': id},
                                success: function (respuesta) {

                                    var cuerpo = $('#cuerpo');//tabla-tbody
                                    cuerpo.empty();
                                    for (var i = 0; i < respuesta.length; i++) {
                                        var item = respuesta[i];
                                        var fila = "<tr>";
                                        var fot;
                                        var fot2;
                                        var fot3;
                                        var fot4;
                                        fot = "<img src='" + item.foto_act_1 + "'>";
                                        fot2 = "<img src='" + item.foto_act_2 + "'>";
                                        fot3 = "<img src='" + item.foto_act_3 + "'>";
                                        fot4 = "<img src='" + item.foto_act_4 + "'>";



                                        fila += "<td>" + item.nombre_actividad + "</td>" + "<td>" + item.duracion_aproximada + "</td>";
                                        fila += "<td>" + item.recomendacion + "</td>" + "<td>" + item.categoria + "</td>";
                                        fila += "<td>" + item.descripcion + "</td>" + "<td>" + item.edad_recomendada + "</td>";
                                        fila += "<input class='info' data-info='" + JSON.stringify(item) + "'  type='hidden' value='modificar'/>";
                                        fila += "<input class='id' data-id='" + item.id_paquete_predeterminado + "'  type='hidden' value='eliminar'/>";
                                        cuerpo.append(fila);
                                        foto.append(fot);
                                        foto.append(fot2);
                                        foto.append(fot3);
                                        foto.append(fot4);
                                    }



                                }
                            });

                        });

                    }
                });
            }
        </script>
    </body>
    </html>
    <?php
} else if ($_SESSION['rol'] == 'administrador') {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaAdministrador.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>
