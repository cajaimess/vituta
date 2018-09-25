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
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />


        </head>
        <body>
            <!-- /top navigation -->
            <div class="page-title">
                <div class="title_left">
                    <h3>Crear<small>Paquetes</small></h3>
                </div>
            </div>
            <div class="col-md-12 col-xs-12">
                <div class="dashboard_graph">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Crear Paquete <small>Predeterminado</small></h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <br />
                            <form  action="<?= REGISTRAR_PREDETERMINADO['url'] ?>" class="form-horizontal form-label-left input_mask" method="POST" name="formulario">

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="paq_nombre_paquete">Nombre Paquete</label><br>
                                    <input type="text"  class="form-control has-feedback-left" name="paq_nombre_paquete" id="paq_nombre_paquete"placeholder="Nombre Paquete" >
                                    <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                </div>


                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="precio_persona">Precio Persona</label><br>
                                    <input type="number" name="paq_precio_persona" class="form-control" id="paq_precio_persona"min="1" placeholder="Precio persona">
                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                </div>
                                <?php foreach ($lista as $obj) { ?>

                                    <div class="form-group">
                                        <input type="hidden" class="form-control" value="<?= $obj->id_paquete_predeterminado ?>" name="valor" id="valor" />
                                    </div>
                                <div class="textos" id="caja">
                                        <input type="checkbox" name="check[]" value="<?= $obj->id_actividad ?>" > <?= $obj->nombre_actividad ?>    <br>
                                    </div>
                                <?php } ?>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-9">

                                        <div class="botones">

                                            <button name="btn" id="btn" class="btn btn-primary" >Insertar Paquete</button>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>

            <script type="text/javascript">


                function Registro() {
                    var mensaje = $('#mensaje');
                    var paq_nombre_paquete = $('#paq_nombre_paquete').val();
                    if (paq_nombre_paquete === '') {
                        mensaje.html('Debe ingresar el nombre del paquete');
                        return;
                    }

                    var paq_precio_persona = $('#paq_precio_persona').val();
                    if (paq_precio_persona === '') {
                        mensaje.html('Debe ingresar el Precio del paquete ');
                        return;
                    }
                    var check = $('#caja input[type=checkbox]:checked');
                    var cajaArreglo = [];
                    for (var i = 0; i < check.length; i++) {
                    cajaArreglo.push($(check[i]).val());
                    }
                    var valor=$('#valor').val();


                    $.ajax({
                        'url': '<?= REGISTRAR_PREDETERMINADO['url'] ?>',
                        'type': 'POST',
                        'data': {'paq_nombre_paquete': paq_nombre_paquete, 'paq_precio_persona': paq_precio_persona, 'cajaArreglo':cajaArreglo,'valor':valor},
                        'success': function (respuesta) {
                            alert("Paquete Registrado exitosamente");

                            document.location.href = '<?= INICIO_SESION['url'] ?>';

                        }

                    });

                }
                $('#btn').on('click', function (e) {
                    e.preventDefault();
                    Registro();
                });

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