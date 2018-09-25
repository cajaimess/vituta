<?php
if ($_SESSION['rol'] === 'usuario') {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title></title>

        </head>
        <body>


            <div class="page-title">
                <div class="title_left">
                    <h3>Reservas <small>Mis reservas</small></h3>
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
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="dashboard_graph">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Destinos <small>Selecciona tu destino</small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form id="form" action="<?= CONFIRMACION_FINAL_RESERVA_CRE['url'] ?>" method="POST">
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label> Dale nombre a esta gran experiecia</label>
                                        <input type="text" id="nombre_personalizado" name="nombre_personalizado" class="form-control" placeholder="Nombre"/>
                                        <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <?php
                                    foreach ($seguroGuia as $obj) {
                                        $valor_guia = $obj->valor_guia;
                                        $valor_seguro = $obj->valor_seguro;
                                        $id_valor_seguro = $obj->id_valor_seguro;
                                        $id_valor_guia = $obj->id_valor_guia;
                                    }
                                    ?>
                                    <div class="table-responsive">

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <td>Nombre Producto</td>
                                                    <td>Valor Final </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $valor_total = 0;
                                                $cantidadActividades = 0;
                                                for ($index = 0; $index < count($actividades); $index++) {

                                                    foreach ($infoActividades[$index] as $value) {
                                                        ?>
                                                        <tr>
                                                            <td><?= $value->nombre_actividad ?></td>
                                                            <td><?= $value->valor_actividad ?></td>
                                                        </tr>
                                                    <input type="hidden" name="cantidad_actividades<?= $index ?>" value="<?= $value->id_actividad ?>"/>
                                                    <?=
                                                    $valor_total+= $value->valor_actividad;
                                                }
                                                $cantidadActividades = $cantidadActividades + 1;
                                            }
                                            ?>
                                            <tr>
                                                <td>Valor Seguro /persona</td>
                                                <td><?= $valor_seguro ?></td>
                                            </tr>
                                            <tr>
                                                <td>Valor Guia/persona</td>
                                                <td><?= $valor_guia ?></td>
                                            </tr>
                                            <tr>
                                                <td>PrecioPaquete/persona</td>
                                                <td><?= $valor_total + $valor_guia + $valor_seguro ?></td>
                                            </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="fecha_servicio">Seleccione la fecha que desee:</label>
                                        <input type="date" name="fecha_servicio" id="fecha_servicio" class="form-control" placeholder="Fecha"/>
                                        <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="cantidad_personas">Cantidad Personas:</label>
                                        <input type="number" name="cantidad_personas" id="cantidad_personas" class="form-control" placeholder="Cantidad de personas"/>
                                        <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                    <div id="mensaje"></div>
                                    <input type="hidden" name="id_guia" value="<?= $id_valor_guia ?>"/>
                                    <input type="hidden" name="id_seguro" value="<?= $id_valor_seguro ?>"/>
                                    <input type="hidden" name="valor_paquete_persona" value="<?= $valor_total ?>"/>
                                    <input type="hidden" name="cantidad_actividades" value="<?= $cantidadActividades ?>"/>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                            <input id="btnR" type="submit" value="Finalizar Reserva" class="btn btn-success" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
                function validarCaracteristicasReservaCreada() {
                var opcion = false;
                    var mensaje = $('#mensaje');
                    var nombrePaquete = $('#nombre_personalizado').val();
                    if (nombrePaquete === '') {
                mensaje.html("Debe crear un nombre para su reserva");
                    opcion = true;
                return false;
                    }
                    var cantidadPersonas = $('#cantidad_personas').val();
                    if (cantidadPersonas <= 0) {
                mensaje.html("cantidad invalida");
                    opcion = true;
                return false;
                }
                    var fechaReserva = $('#fecha_servicio').val();
                    var fechaActual = new Date();
                    if (fechaReserva < fechaActual) {
                    mensaje.html('fecha invalida');
                    opcion = true;
                        return false;
                } else {
                opcion = true;
            if (opcion === true) {
                $("#form").submit();
                    }

                }
            }
            $('#btnR').on('click', function (e) {
                e.preventDefault();
                validarCaracteristicasReservaCreada();
            });

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
