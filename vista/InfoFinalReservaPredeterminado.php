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
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/Fondos/fondoInicioSesion.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/Fondos/ContenidoPagina.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/nprogress/nprogress.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/flat/green.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/dist/jqvmap.min.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/css/daterangepicker.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/build/css/custom.min.css" rel="stylesheet" type="text/css"/>
            <link href="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/Fondos/estilologo.css" rel="stylesheet" type="text/css"/>
        </head>
        <body class="nav-md">
            <div class="container body ">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;">
                                <a href="<?= MENU['url'] ?>" class="site_title"><img src="../archivos/avioncito.png" alt="" style="width: 65px; height: 45px; margin: 2px 5px 5px -5px; "/><span> Vituta!</span></a>
    <!--                               <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>-->
                            </div>
                            <div class="clearfix"></div>
                            <!-- menu profile quick info -->
                            <div class="profile clearfix">
                                <!--                            <div class="profile_pic">
                                                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                                                            </div>-->
                                <div class="profile_info">
                                    <span>Bienvenida,</span>
                                    <h2>Meei</h2>
                                </div>
                            </div>
                            <!-- /menu profile quick info -->
                            <br />
                            <!-- sidebar menu -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3>General</h3>
                                    <ul class="nav side-menu">
                                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= MENU['url'] ?>">Inicio</a></li>
                                                <li><a href="index2.html">Dashboard2</a></li>
                                                <li><a href="index3.html">Dashboard3</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-suitcase"></i> Destinos  <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= CONSULTAR_PREDETERMINADO['url'] ?>">consulta los destinos</a></li>
                                                <li><a href="form_advanced.html">Advanced Components</a></li>
                                                <li><a href="form_validation.html">Form Validation</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-calendar-check-o"></i> Reserva <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= CREAR_RESERVA_PAQUETE_PREDETERMINADO['url'] ?>">Elige tu destino</a></li>
                                                <li><a href="<?= CONSULTAR_RESERVAS_USUARIO['url'] ?>">Mis Reservas</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-puzzle-piece"></i> Arma tu viaje  <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= CREA_TU_PAQUETE_INFORMACION['url'] ?>">Crea tu Paquete</a></li>
                                                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu_section">
                                    <h3>Usuario</h3>
                                    <ul class="nav side-menu">
                                        <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="page_403.html">Quienes somos</a></li>
                                                <li><a href="page_404.html">Fotos</a></li>
                                                <li><a href="page_500.html">Videos</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-power-off"></i> Sesión <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="profile.html">Perfil</a></li>
                                                <li><a href="<?= CERRAR_SESION['url'] ?>">Cerrar sesion </a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /sidebar menu -->
                            <!-- /menu footer buttons -->
                            <div class="sidebar-footer hidden-small">
                                <a data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="fa fa-facebook-official" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                    <span class="fa fa-twitter" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Lock">
                                    <span class="fa fa-instagram" aria-hidden="true"></span>
                                </a>
                                <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                    <span class="fa fa-youtube-play" aria-hidden="true"></span>
                                </a>
                            </div>
                            <!-- /menu footer buttons -->
                        </div>
                    </div>

                    <!--            parte superior de la pagina-->

                    <div class="top_nav">
                        <div class="nav_menu">
                            <nav>
                                <div class="nav toggle">
                                    <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                                </div>
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="">
                                        <a href="javascript:;" class="user-profile dropdown-tog gle" data-toggle="dropdown" aria-expanded="false">
                                            <img src="images/img.jpg" alt="">Meei
                                            <span class=" fa fa-angle-down"></span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-usermenu pull-right">
                                            <li><a href="javascript:;"> Perfil</a></li>
                                            <li>
                                                <a href="javascript:;">
                                                    <span class="badge bg-red pull-right">50%</span>
                                                    <span>Promociones</span>
                                                </a>
                                            </li>
                                            <li><a href="javascript:;">Ayuda</a></li>
                                            <li><a href="<?= CERRAR_SESION['url'] ?>"><i class="fa fa-sign-out pull-right"></i> Cerrar sesión</a></li>
                                        </ul>
                                    </li>
                                    <li role="presentation" class="dropdown">
                                        <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="badge bg-green">3</span>
                                        </a>
                                        <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                            <li>
                                                <a>
                                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span>John Smith</span>
                                                        <span class="time">3 mins ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a>
                                                    <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                                    <span>
                                                        <span>John Smith</span>
                                                        <span class="time">3 mins ago</span>
                                                    </span>
                                                    <span class="message">
                                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="text-center">
                                                    <a>
                                                        <strong>See All Alerts</strong>
                                                        <i class="fa fa-angle-right"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>


                    </div>
                    <!-- /top navigation -->
                    <div class="right_col" role="main">
                        <h1>HOLAaaa</h1>
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
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="dashboard_graph">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Consulta <small>consulta de actividades</small></h2>
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

                                            <?php
                                            foreach ($lista as $obj) {
                                                $valor_guia = $obj->valor_guia;
                                                $valor_seguro = $obj->valor_seguro;
                                                $id_valor_seguro = $obj->id_valor_seguro;
                                                $id_valor_guia = $obj->id_valor_guia;
                                            }
                                            ?>
                                            <h1>Información de reserva</h1>
                                            Sra. ... Usted desea reservar con la siguiente información:
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>

                                                        <td>Nombre producto </td>
                                                        <td>Cantidad </td>
                                                        <td>Valor Unidad</td>
                                                        <td>Valor Final</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td> Paquete <?= $nombre_paquete ?></td>
                                                        <td><?= $cantidad_personas ?> </td>
                                                        <td><?= $precio_paquete ?> </td>
                                                        <td><?= $precio_paquete * $cantidad_personas ?> </td>
                                                    </tr>

                                                    <?php
                                                    $contador = 0;
                                                    $cantidad_guias = 0;
                                                    for ($i = 0; $i < $cantidad_personas; $i++) {
                                                        $contador = $contador + 1;
                                                        if ($contador == 5) {
                                                            $cantidad_guias = $cantidad_guias + 1;
                                                            $contador = 0;
                                                        }
                                                    }
                                                    if ($cantidad_personas % 5 != 0) {
                                                        $cantidad_guias = $cantidad_guias + 1;
                                                    }
                                                    ?>
                                                    <tr>
                                                        <td>Guias(s)</td>
                                                        <td><?= $cantidad_guias ?></td>
                                                        <td><?= $valor_guia ?></td>
                                                        <td><?= $valor_guia * $cantidad_guias ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Seguro(s)</td>
                                                        <td><?= $cantidad_personas ?> </td>
                                                        <td><?= $valor_seguro ?> </td>
                                                        <td><?= $valor_seguro * $cantidad_personas ?> </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Precio Final</td>
                                                        <td>-</td>
                                                        <td>-</td>
                                                        <td><?= $valor_total = ($precio_paquete * $cantidad_personas) + ($valor_guia * $cantidad_guias) + ($valor_seguro * $cantidad_personas) ?></td>
                                                    </tr> 
                                                    <tr>
                                                        <td>Fecha seleccionada</td>
                                                        <td><?= $fecha_reserva ?> </td>
                                                    </tr>

                                                    <?=
                                                    $key = "4Vj8eK4rloUd272L48hsrarnUA";

                                                    $referenceCode = rand(10000, 90000);
                                                    $merchant = 508029;
                                                    $total = $valor_total;
                                                    $firma = ($key . "~" . $merchant . "~" . $referenceCode . "~" . $total . "~COP");
                                                    $firma_final = md5($firma);
                                                    ?>



                                                <form method="POST" action="https://sandbox.checkout.payulatam.com/ppp-web-gateway-payu/">
                                                    <input name="merchantId"   id="merchantId" type="hidden"  value="508029"   >
                                                    <input name="accountId"    id="accountId" type="hidden"  value="512321" >
                                                    <input name="description"  id="description" type="hidden"  value="<?= $nombre_paquete ?>"  >
                                                    <input name="referenceCode" id="referenceCode" type="hidden"  value="<?= $referenceCode ?>" >
                                                    <input name="amount"    id="amount"    type="hidden"  value="<?= $valor_total ?>"   >
                                                    <input name="tax"      id="tax"     type="hidden"  value="0"  >
                                                    <input name="taxReturnBase" id="taxReturnBase" type="hidden"  value="0" >
                                                    <input name="currency"  id="currency"    type="hidden"  value="COP" >
                                                    <input name="signature"  id="signature"   type="hidden"  value="<?= $firma_final ?>"  >
                                                    <input name="test"      id="test"    type="hidden"  value="1" >
                                                    <input name="buyerEmail"  id="buyerEmail"  type="hidden"  value='camilo@gmail.com' >
                                                    <input name="responseUrl" id="responseUrl"   type="hidden"  value="http://localhost/Vituta/index.php" >
                                                    <input name="confirmationUrl"  id="confirmationUrl"  type="hidden"  value="http://localhost/Vituta/vista/confirmacion.php" >
                                                    <input name="Submit"   id="btn" type="submit"  value="Enviar" >
                                                </form>

                                                <input type="hidden" id="id_paquete_pre" name="id_paquete_pre" value="<?= $id_pred_paquete ?>"/>
                                                <input type="hidden" id="id_valor_guia" name="id_valor_guia" value="<?= $id_valor_guia ?>"/>
                                                <input type="hidden" id="id_valor_seguro" name="id_valor_seguro" value="<?= $id_valor_seguro ?>"/>
                                                <input type="hidden" id="fecha_reserva" name="fecha_servicio" value="<?= $fecha_reserva ?>"/>
                                                <input type="hidden" id="cantidad_guias" name="cantidad_guias" value="<?= $cantidad_guias ?>"/>
                                                <input type="hidden" id="cantidad_personas" name="cantidad_personas" value="<?= $cantidad_personas ?>"/>
                                                <input type="hidden" id="valor_total" name="valor_total" value="<?= $valor_total ?>"/>






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
                    function generarFacturaFinal(idValorGuia, idValorSeguro, idPaqPre, fechaServicio, cantidadGuias, cantidadPersonas, valorTotal) {
                        $.ajax({
                            type: 'POST',
                            async: false,
                            data: 'id_valor_guia=' + idValorGuia, 'id_valor_seguro=' + idValorSeguro, 'id_paquete_pre=' + idPaqPre, 'fecha_servicio=' + fechaServicio, 'cantidad_guias=' + cantidadGuias, 'cantidad_personas=' + cantidadPersonas, 'valor_total=' + valorTotal,
                                    url: '<?= RESERVA_INSERTAR['url'] ?>',
                            success: function (data) {
                                respuesta = JSON.parse(data);
                            }
                        });
                        alert(respuesta);
                    }
                </script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/jquiry/dist/jquery.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/fastclick.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/fastclick.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/Chart.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/gauge.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/bootstrap-progressbar.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/custom.min.js" type="text/javascript"></script>
        </body>
    </html>
    <?php
} else if ($_SESSION['rol'] == 'administrador') {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaAdministrador.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>
