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
            <title>Crea tu paquete</title>

        </head>

        <body>
            <div class="page-title">
                <div class="title_left">
                    <h3>Gestion <small>Gestion de actividades</small></h3>
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
                                <h2>Stripped table <small>Stripped table subtitle</small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form  action="<?= CREA_TU_PAQUETE['url'] ?>" method="POST" >
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>

                                                    <th>Nombre Actividad</th>
                                                    <th>Duracion Aproximada</th>
                                                    <th>Recomendacion</th>
                                                    <th>Categoria</th>
                                                    <th>Descripcion</th>
                                                    <th>Edad Recomendada</th>
                                                    <th>Valor Actividad Por Persona</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $contadorActividadesPosicion = 0;
                                                $contadorActividades = 0;
                                                foreach ($lista as $obj) {
                                                    ?>
                                                    <tr>
                                                        <td><?= $obj->nombre_actividad ?></td>
                                                        <td><?= $obj->duracion_aproximada ?></td>
                                                        <td><?= $obj->recomendacion ?></td>
                                                        <td><?= $obj->categoria ?></td>
                                                        <td><?= $obj->descripcion ?></td>
                                                        <td><?= $obj->edad_recomendada ?></td>
                                                        <td><?= $obj->valor_actividad ?></td>
                                                        <td><input type="checkbox"  name="actividad_<?= $contadorActividadesPosicion + 1 ?>" id="actividad_<?= $contadorActividadesPosicion + 1 ?>" value="<?= $obj->id_actividad ?>"></td>
                                                    </tr>
                                                    <?php
                                                    if ('actividad_' . $contadorActividadesPosicion) {
                                                        $contadorActividades = $contadorActividades + 1;
                                                    }
                                                    echo $contadorActividadesPosicion = $contadorActividadesPosicion + 1;
                                                    echo $contadorActividades;
                                                }
                                                ?>
                                            </tbody>
                                            <input type="hidden" value="<?php $contadorActividades ?>" id="contador_actividades"/>
                                        </table>
                                    </div>
                                    <input id="btnE" type="submit" class="btn btn-success" value="Crear Reserva">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script>
            //                function ActividadesSelect() {
            //                    alert('aca');
            //                    var mensaje = $('#mensaje');
            //                    var contadorActividades = $('#contador_actividades').val();
            //                    
            //                }
            $('#btnE').on('click', function (e) {
                alert('blablabla');
                e.preventDefault();
                //                    ActividadesSelect();
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
