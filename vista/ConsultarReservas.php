<?php
if ($_SESSION['rol'] === 'usuario') {
    ?>
    <!DOCTYPE html>
    <!--
    To change this license header, choose License Headers in Project Properties.
    To change this template file, choose Tools | Templates
    and open the template in the editor.
    -->
    <html>
        <head>
            <meta charset='UTF-8'>
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />
           
        </head>
        <body>
            
                    <div class="right_col" role="main">
                        
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
                            <div class="col-md-10 col-sm-6 col-xs-12">
                                <div class="dashboard_graph">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Consulta <small>Mis reservas</small></h2>
                                            <ul class="nav navbar-right panel_toolbox">
                                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                                </li>
                                                <li class="dropdown">
                                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li><a href="#">Settings 1</a>
                                                        </li>
                                                        <li><a href="#">Settings 2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                                </li>
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="x_content">

                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <td>Nombre Paquete reservado</td>
                                                        <td>Fecha Seleccionada</td>
                                                        <td>Cantidad de personas</td>
                                                        <td>Valor Final</td>
                                                    </tr>
                                                    <?php foreach ($listaCreado as $valorCreado) { ?>
                                                        <tr>
                                                            <td> <?= $valorCreado->nombre_creado ?>  </td>
                                                            <td> <?= $valorCreado->fecha_servicio ?> </td>
                                                            <td> <?= $valorCreado->cantidad_personas ?> </td>
                                                            <td> <?= $valorCreado->valor_total ?> </td>
                                                            <td> <button onclick="eliminarReservaCreado(<?= $valorCreado->id_reserva_creado ?>)">Cancelar Reserva</button> </td>
                                                        </tr>

                                                    <?php } ?>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($listaPredeterminado as $valorPredeterminado) { ?>
                                                        <tr>
                                                            <td>  <?= $valorPredeterminado->id_reserva_predeterminado ?>   </td>
                                                            <td>  <?= $valorPredeterminado->nombre_paquete ?>   </td>
                                                            <td> <?= $valorPredeterminado->fecha_servicio ?> </td>
                                                            <td> <?= $valorPredeterminado->cantidad_personas ?> </td>
                                                            <td> <?= $valorPredeterminado->valor_total ?> </td>
                                                            <td> <button class="btn btn-danger" onclick=" eliminarReservaPredetermindo(<?= $valorPredeterminado->id_reserva_predeterminado ?>)">Cancelar Reserva</button> </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script>
                                                            var respuesta = "";
                                                            function consultarReservas() {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    async: false,
                                                                    data: 'id_reserva=' + idReserva,
                                                                    url: '<?= CONSULTAR_RESERVAS_USUARIO['url'] ?>',
                                                                    success: function (data) {
                                                                        respuesta = JSON.parse(data);
                                                                    }
                                                                });
                                                            }
                                                            function eliminarReservaCreado(idReserva) {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    async: false,
                                                                    data: 'id_reserva=' + idReserva,
                                                                    url: '<?= CAMBIAR_ESTADO_RESERVA_CREADO['url'] ?>?',
                                                                    success: function (data) {
                                                                        alert("reserva eliminada :-)");
                                                                        respuesta = JSON.parse(data);
                                                                        consultarReservas(respuesta);
                                                                    }
                                                                });
                                                            }

                                                            function eliminarReservaPredetermindo(idReserva) {
                                                                $.ajax({
                                                                    type: 'POST',
                                                                    async: false,
                                                                    data: 'id_reserva=' + idReserva,
                                                                    url: '<?= CAMBIAR_ESTADO_RESERVA_PREDETERMINADO['url'] ?>?',
                                                                    success: function (data) {
                                                                        alert("reserva eliminada :-)");
                                                                        respuesta = JSON.parse(data);
                                                                        consultarReservas(respuesta);

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