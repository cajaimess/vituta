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
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />

        </head>
        <body>
            <div class="page-title">
                <div class="title_left">
                    <h3>Gestion <small>Gestion de lugares</small></h3>
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
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="dashboard_graph">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Consulta <small>consulta de lugares</small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Nombre Lugar</th>
                                                <th>Descripción</th>
                                                <th>Disponibilidad</th>
                                                <th>Modificar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="cuerpo">


                                        </tbody>

                                    </table>
                                </div>
                                <input type="button" value="consultar" id="btn" class="btn btn-success" />
        <!--                                    <input type="button" onclick="history.back()" class="btn btn-success" name="volver atrás" value="Volver atrás">-->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="Modalmodificar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modificación de lugares</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form id="form">
                                    <input type="hidden" id="id" name="id"/>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" id="nombre" class="form-control has-feedback-left" placeholder="Nombre"/>
                                        <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="nombre">Descripción:</label>
                                        <input type="text" id="descripcion" class="form-control" placeholder="Categoria"/>
                                        <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="nombre">Disponibilidad:</label>
                                        <select id="disponibilidad" class="form-control has-feedback-left">
                                            <option>--Selecciona--</option>
                                            <option>Disponible</option>
                                            <option>Mantenimiento</option>
                                            <option>Inactivo</option>
                                        </select>
                                        <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer botones">
                                <input type="button" id="btnModificar" value="Guardar" class="btn btn-primary"/>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>"> Registrar Actividad</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!--<div class="col-md-6 col-xs-12">-->
            <!--<div class="x_panel">-->
            <!--                                        <div class="x_title">
                                                        <h2>Modificar <small>Modificación de lugares</small></h2>
                                                        <div class="clearfix"></div>
                                                    </div>-->
            <!--<div class="x_content">-->

            <!--
                                                            <div class="form-group">
                                                                <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            
            
                                                                </div>
                                                            </div>-->


            <!--</div>-->
            <!--</div>-->

            <!--</div>-->




        </div>
        <script type="text/javascript">

            function consultar() {
                $.ajax({
                    'url': '<?= GESTIONAR_LUGAR_CONSULTA['url'] ?>',
                    'type': 'POST',
                    'data': {},
                    success: function (respuesta) {

                        var cuerpo = $('#cuerpo');//tabla-tbody
                        cuerpo.empty();
                        for (var i = 0; i < respuesta.length; i++) {
                            var lugar = respuesta[i];
                            var fila = "<tr>";
                            fila += "<td>" + lugar.nombre_lugar + "</td>" + "<td>" + lugar.descripcion + "</td>" + "<td>" + lugar.disponibilidad + "</td>";
                            fila += "<td> <input class='modificar btn btn-warning' data-info='" + JSON.stringify(lugar) + "'  type='button' data-toggle='modal' data-target='#Modalmodificar' value='modificar'/></td>";
                            fila += "<td> <input class='btnEliminar btn btn-danger' data-id='" + lugar.id_lugar + "'  type='button' value='eliminar'/></td></tr>";
                            cuerpo.append(fila);
                        }

                        $('tbody input.modificar').on('click', function (e) {
                            var data = $(this).attr('data-info');
                            var datosLugar = JSON.parse(data);
                            $('#nombre').val(datosLugar.nombre_lugar);
                            $('#descripcion').val(datosLugar.descripcion);
                            $('#disponibilidad').val(datosLugar.disponibilidad);
                            $('#id').val(datosLugar.id_lugar);

                        });
                        $('tbody input.btnEliminar').on('click', function (e) {
                            var id = $(this).attr('data-id');
                            var alert = confirm('¿Desea eliminar la Fila?');
                            if (alert == true) {
                                $.ajax({
                                    'url': '<?= GESTIONAR_LUGAR_ELIMINAR['url'] ?>',
                                    'type': 'POST',
                                    'data': {'id': id},
                                    success: function (respuesta) {
                                    }
                                });
                                consultar();
                            } else {
                                return false;
                            }
                        });

                    }
                });
            }
            $('#btn').on('click', function (e) {
                e.preventDefault();//OJO solo funciona en CHROME-FIREFOX-OPERA-SAFARI
                consultar();
            });

            $('#btnModificar').on('click', function (e) {
                var nombre = $('#nombre').val();
                var descripcion = $('#descripcion').val();
                var disponibilidad = $('#disponibilidad').val();
                var id = $('#id').val();
                $.ajax({
                    'url': '<?= GESTIONAR_LUGAR_MODIFICAR['url'] ?>',
                    'type': 'POST',
                    'data': {'id': id, 'nombre': nombre, 'descripcion': descripcion, 'disponibilidad': disponibilidad},
                    success: function (respuesta) {
                        consultar();
                    }

                });
            });
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