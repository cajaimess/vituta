<?php
if ($_SESSION['rol'] === "administrador") {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />

        </head>
        <body> 

            <div class="page-title">
                <div class="title_left">
                    <h3>Registrar <small>registro de actividades</small></h3>
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
                <div class="col-md-12 col-xs-12">
                    <div class="dashboard_graph">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Registro <small>Registarar actividad</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="frm" class="form-horizontal form-label-left input_mask">

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="nombre">Nombre de actividad: </label>
                                        <input type="text" id="nombre" name="nombre" class="form-control has-feedback-left" placeholder="Nombre" >
                                        <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                    </div>


                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="duracion">Duración aproximada: </label>
                                        <select id="duracion" name="duracion" class="form-control">
                                            <option> 30 minutos</option>
                                            <option> 1 a 2 horas</option>
                                            <option> 2 a 3 horas</option>
                                            <option> 3 a 5 horas</option>
                                        </select>
                                        <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="categoria">Categoria: </label>
                                        <select name="categoria" id="categoria" class="form-control has-feedback-left"></br>
                                            <option>Extrema</option>
                                            <option>Deportiva</option>
                                            <option>Familiar</option>
                                        </select>
                                        <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                    </div>


                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="edad">Edad recomendada: </label>
                                        <select id="edad" name="edad" class="form-control">
                                            <option>0 a 5 </option>
                                            <option>5 a 12 </option>
                                            <option>13 a 16 </option>
                                            <option>17 en adelante</option>
                                            <option>No tiene restriccion de edad </option>
                                        </select>
                                        <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                    </div>

                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="valor">Valor: </label>
                                        <input type="text" id="valor" class="form-control has-feedback-left" name="valor" placeholder="valor" >
                                        <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="recomendacion">Recomendaciones: </label>
                                        <textarea name="recomendacion" id="recomendacion" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="col-md-12 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="descripcion">Descripción: </label>
                                        <textarea  name="descripcion" id="descripcion"class="form-control has-feedback-left" rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="foto_act_1">Foto 1: </label>
                                        <input type="file" class="" name="foto_act_1" id="foto_act_1"  accept="image/*">

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="foto_act_2">Foto 2: </label>
                                        <input type="file" class="has-feedback-left" name="foto_act_2" id="foto_act_1" accept="image/*">

                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="foto_act_3">Foto 3: </label>
                                        <input type="file" class="" name="foto_act_3" id="foto_act_1" accept="image/*">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                        <label for="foto_act_4">Foto 4: </label>
                                        <input type="file" class="has-feedback-left" name="foto_act_4" id="foto_act_1" accept="image/*">
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">

                                            <input type="submit" id="btnRegistrarActividad" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

                <script type="text/javascript">
                    $('#btnRegistrarActividad').on('click', function (e) {
                        e.preventDefault();
                        registrarActividad();
                    });

                    function registrarActividad() {
                        var datos = new FormData($('#frm')[0]);//<- El cero hace referencia desde que la posicion que se envia

                        $.ajax({
                            'url': "<?= REGISTRAR_ACTIVIDAD_GUARDAR['url'] ?>",
                            'type': 'POST',
                            'data': datos,
                            'contentType': false,
                            'processData': false,
                            beforesend: function () {

                            },
                            'success': function (respuesta) {
                              
                                swal(
                                        "Good job!",
                                        "",
                                        "success"
                                        );
                            }
                        });
                    }
                </script>

        </body>
    </html>
    <?php
} else if ($_SESSION['rol'] == "usuario") {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaUsuario.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>