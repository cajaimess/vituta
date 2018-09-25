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
            <meta charset="UTF-8">
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />


        </head>
        <body>
            <div class="page-title">
                <div class="title_left">
                    <h3>Reserva <small>Informacion de reserva</small></h3>
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
                                <h2>Destinos<small>Seleccione su destino</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">

                                <form action="<?= INFORMACION_RESERVA['url'] ?>" method="POST">
                                    <div class="table-responsive">
                                        <table class="table table-striped jambo_table bulk_action">

                                            <thead>
                                                <tr>
                                                    <th><h4>Nombre Paquete</h4></th>
                                                    <th><h4>Precio del paquete</h4></th>
                                                    <th><h4>Reserve ya</h4></th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($lista as $obj) { ?>
                                                    <tr>
                                                        <td class="hover"><?= $obj->nombre_paquete ?></td>
                                                <td class="hover"><?= $obj->precio_persona ?></td>
                                                    <input type="hidden" id="id_paquete" name="id_paquete" value="<?= $obj->id_paquete_predeterminado ?>"/>
                                                    <input type="hidden" id="nombre_paquete" name="nombre_paquete" value="<?= $obj->nombre_paquete ?>"/>
                                                    <input type="hidden" id="precio_paquete" name="precio_paquete" value="<?= $obj->precio_persona ?>"/>
                                                    <td><button class="btn btn-success" id="botonInfoReser">Obtener Paquete</button></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <
    </body>
    </html>
    <?php
} else if ($_SESSION['rol'] == 'administrador') {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaAdministrador.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>