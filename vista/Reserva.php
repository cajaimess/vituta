<?php
if ($_SESSION['rol'] === "usuario") {
    ?> <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require_once '../ruta.php';
session_start();
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
        <div class="container body ">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?=MENU['url']?>" class="site_title"><img src="../archivos/avioncito.png" alt="" style="width: 65px; height: 45px; margin: 2px 5px 5px -5px; "/><span> Vituta!</span></a>
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
                <h1>HOLAAAAA</h1>
                <div class="conteTablas">
            <div class="bordes">
               
            </div>
        </div>
    
            </div>
        </div>
        <form action="<?= RESERVA_INSERTAR['url'] ?>" method="POST">


            <input type="hidden" name="paq_id" id="paq_id" value=" <?php print_r($obj) ?>"/><br/>
            <label>usted desea reservar el siguiente paquete: </label><br/>
            <label>nombre paquete </label>
            <input type="text" name="paq_id" id="paq_id" value=" <?php print_r($_GET['id_paq']) ?>"/><br/>
            <input type="text" name="paq_nombre" id="paq_nombre" value=" <?php print_r($_GET['nom_paq']) ?>"/><br/>
            <label>precio paquete </label>    
            <input type="text" name="pre_paq" id="pre_paq" value=" <?php print_r($_GET['pre_paq']) ?>"/><br/>
            <label for="fecha_reserva">Fecha Reserva:</label>
            <input type="date" name="fecha_reserva" id="fecha_reserva"/><br/>
            <label for="cantidad_personas">Cantidad Personas:</label>
            <input type="number" name="cantidad_personas" id="cantidad_personas">
            <button >Reservar</button>
        </form>
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
