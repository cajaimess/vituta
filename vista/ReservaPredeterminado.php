<?php
if ($_SESSION['rol'] === "usuario") {
    ?> <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
//require_once '../ruta.php';
//session_start();
$obj = $_SESSION['id_usuario'];
?>
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
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?= MENU['url'] ?>"><i></i> <span><img src="../archivos/Logo.png" alt=""/></span></a>
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
                    <h1>HOLAAAAA</h1>
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

                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Form Basic Elements <small>different form elements</small></h2>
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
                                <br />
                                <form id="form" action="<?= INFORMACION_RESERVA_FINAL['url'] ?>" method="POST" class="form-horizontal form-label-left">
                                    <h2>Usted desea reservar el siguiente paquete:</h2>

                                    <div class="form-group">
                                        <label> <?php
                                            $cantidadFechasP = count($fechas_value);
                                            $cantidadFechasC = count($fechas_value2);
                                            if ($cantidadFechasC > $cantidadFechasP) {
                                                $cantidad1 = $cantidadFechasC;
                                                $cantidad2 = $cantidadFechasP;
                                                $p = $fechas_value;
                                                $s = $fechas_value2;
                                                $pc = $cantidad_value;
                                                $sc = $cantidad_value2;
                                            } else {
                                                $cantidad1 = $cantidadFechasP;
                                                $cantidad2 = $cantidadFechasC;
                                                $p = $fechas_value2;
                                                $s = $fechas_value;
                                                $pc = $cantidad_value2;
                                                $sc = $cantidad_value;
                                            }
                                            for ($i = 0; $i < $cantidad1; $i++) {
                                                for ($j = 0; $j < $cantidad2; $j++) {
                                                    if ($p[$i]==$s[$j] && ($pc[$i] + $sc[$j])>=20) {
                                                        $fechasFinal[] = $p[$i];
                                                    }
                                                }
                                            }
                                            print_r($fechasFinal);
                                            ?></label>
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre paquete </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="nombre_paquete" id="nombre_paquete" value=" <?= $nombre_paquete ?>" readonly="readonly" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">precio paquete </label>    
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="precio_paquete" id="precio_paquete" value="<?= $precio_paquete ?>"  readonly="readonly" class="form-control"/>
                                        </div>
                                    </div>
                                    <h2>Seleccione la información requerida para la reserva</h2>

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha_reserva">Fecha Reserva:</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="date" id="fecha_reserva" name="fecha_reserva" id="fecha_reserva" class="form-control"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cantidad_personas">Cantidad Personas:</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="number" id="cantidad_personas" name="cantidad_personas" id="cantidad_personas" class="form-control" placeholder="Cantidad de personas"/>
                                            <input type="hidden" id="id_paquete_pre" name="id_paquete_pre" value="<?= $id_paquete ?>"/>
                                        </div>
                                    </div>
                                    <div id="mensaje"> </div>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">
                                            <input id="btn"  class="btn btn-success" value="Confirmar Información" type="submit"/>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script type="text/javascript">
                var opcion = false;
                function validarReservaPredeterminado() {
                    var mensaje = $('#mensaje');
                    var cantidadPersonas = $('#cantidad_personas').val();
                    if (cantidadPersonas <= 0) {
                        mensaje.html("cantidad invalida");
                        opcion = true;
                        return false;
                    }
                    var fechaReserva = $('#fecha_reserva').val();
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
                $('#btn').on('click', function (e) {
                    e.preventDefault();
                    validarReservaPredeterminado();
                });

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
} else if($_SESSION['rol']=="administrador"){
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaAdministrador.php';
}else{
        include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>
