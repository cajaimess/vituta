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
            <style>
                /* Always set the map height explicitly to define the size of the div
                 * element that contains the map. */
                #map {
                    height: 50%;
                    width: 50%;
                }
                /* Optional: Makes the sample page fill the window. */
                html, body {
                    height: 100%;
                    margin: 0;
                    padding: 0;
                }
                #floating-panel {

                    top: 10px;
                    left: 25%;
                    z-index: 5;
                    background-color: #fff;
                    padding: 5px;
                    border: 1px solid #999;
                    text-align: center;
                    font-family: 'Roboto','sans-serif';
                    line-height: 30px;
                    padding-left: 10px;
                }
                textarea{
                    resize: none;
                }
            </style>
            <title>Vituta</title>
            <link rel="shortcut icon" href="<?= CARPETA_ARCHIVOS ?>Logo.ico" />


        </head>
        <body>
            <div class="page-title">
                <div class="title_left">
                    <h3>Registrar <small>Registro de lugar</small></h3>
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
            <div class="col-md-10 col-xs-12">
                <div class="dashboard_graph">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Registro <small>Registarar lugar</small></h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">
                            <form id="frms" class="form-horizontal form-label-left input_mask">
<!--                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="address">Nombre de lugar: </label>
                                    <input id="address" name="address" class="form-control" type="text">
                                    <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                </div>-->
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label>Actividad que se desarrolla en el lugar:</label>
                                    <select name="actividad" id="actividad" class="form-control has-feedback-left">
                                        <?php foreach ($datos as $obj) { ?>
                                            <option value="<?= $obj->id_actividad ?>"><?= $obj->nombre_actividad ?></option>
                                        <?php } ?>
                                    </select>
                                    <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="descripcion">Descripción:</label>
                                    <textarea name="descripcion" id="descripcion"class="form-control" rows="3"></textarea></br>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="foto_lugar_1">Foto 1: </label>
                                    <input type="file" class="has-feedback-left" name="foto_lugar_1" id="foto_lugar_1">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="foto_lugar_2">Foto 2: </label>
                                    <input type="file" class="" name="foto_lugar_2" id="foto_lugar_2">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="foto_lugar_3">Foto 3: </label>
                                    <input type="file" class="has-feedback-left" name="foto_lugar_3" id="foto_lugar_3">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                    <label for="foto_lugar_4">Foto 4: </label>
                                    <input type="file" class="" name="foto_lugar_4" id="foto_lugar_4">
                                </div>
                                <input type="hidden" id="longitud" name="longitud" value="">
                                <input type="hidden" id="latitud" name="latitud" value="">
                                <div class="form-group">
                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                       <input type="submit" value="Registrar Lugar" id="btnRegistrarLugar" class="btn btn-primary">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
           
   
        <div id="map"></div> 
        <script>
            function initMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 11,
                    center: {lat: 4.934487, lng: -73.83364399999999}
                });
                var geocoder = new google.maps.Geocoder();

                document.getElementById('submit').addEventListener('click', function () {
                    geocodeAddress(geocoder, map);
                });
            }

            function geocodeAddress(geocoder, resultsMap) {
                var address = document.getElementById('address').value;
                geocoder.geocode({'address': address}, function (results, status) {
                    var contador = 0;
                    if (status === 'OK') {
                        resultsMap.setCenter(results[0].geometry.location);
                        var marker = new google.maps.Marker({
                            map: resultsMap,
                            position: results[0].geometry.location
                        });
                        var latitud = $('#latitud');
                        latitud.val(results[0].geometry.location.lat());

                        var longitud = $('#longitud');
                        longitud.val(results[0].geometry.location.lng());

                        var datos = new FormData($('#frms')[0]);

                        $.ajax({
                            'url': '<?= REGISTRAR_LUGAR_GUARDAR['url'] ?>',
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
                    } else {
                        alert('Geocode was not successful for the following reason: ' + status);

                    }
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDBSGrmtTpL8kTikwmKFg77BSL_z3L4CRA&callback=initMap">
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