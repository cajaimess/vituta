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
    <!--                            <a href=""><i class=""></i><span></span></a>-->
    <!--                            <a href=""><i class="icon icon-paper-plane"><img src="../archivos/avioncito.png" alt="" style="width: 65px; height: 50px; margin: 2px 5px 5px 0px; "/></i><span>Vituta!</span></a>-->
                                <a href="index.html" class="site_title"><img src="../archivos/avioncito.png" alt="" style="width: 65px; height: 45px; margin: 2px 5px 5px -5px; "/><span> Vituta!</span></a>

                            </div>
                            <div class="clearfix"></div>
                            <!-- menu profile quick info -->
                            <div class="profile clearfix">
                                <!--                            <div class="profile_pic">
                                                                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
                                                            </div>-->
                                <div class="profile_info">
                                    <span>Bienvenido,</span>
                                    <h2>Andres</h2>
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
                                        <li><a><i class="fa fa-book"></i> Crear plan turistico   <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= MOSTRAR_PREDETERMINADO['url'] ?>">Registrar paquete predeterminado</a></li>
                                                <li><a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>">Registrar Actividad</a></li>
                                                <li><a href="<?= REGISTRAR_LUGAR['url'] ?>">Registrar Lugar</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-key"></i> Gestion <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= ACTIVIDAD['url'] ?>">Gestionar Actividad</a></li>
                                                <li><a href="<?= GESTIONAR_LUGAR['url'] ?>">Gestionar Lugar</a></li>
                                                <li><a href="<?= AJAX_PREDETERMINADO['url'] ?>">Gestion paquete Predeterminado</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-gears"></i> Configuracciones  <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= MODIFICAR_VISTA['url'] ?>  ">Modificar Usuario</a></li>
                                                <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="menu_section">
                                    <h3>Administrador</h3>
                                    <ul class="nav side-menu">
                                        <li><a><i class="fa fa-bookmark"></i> Extras <span class="fa fa-chevron-down"></span></a>
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
                                            <img src="images/img.jpg" alt="">Andres
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
                                <h3>Modificación <small>Modificación de usuario</small></h3>
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
                            <div class="col-md-6 col-xs-12">
                                <div class="dashboard_graph">
                                    <div class="x_panel">
                                        <div class="x_title">
                                            <h2>Modificar <small>usuario</small></h2>
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
                                            <?php $usuario = $_SESSION['usuario'] ?>
                                            <form  action="<?= MODIFICAR_USUARIO['url'] ?>" class="form-horizontal form-label-left input_mask" method="POST">

                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="usu_nombre">Nombre:</label>
                                                    <input type="text" class="form-control has-feedback-left" name="usu_nombre" value="<?= $usuario->getNombre() ?>" >
                                                    <span class="fa fa-folder-open form-control-feedback left" aria-hidden="true"></span>
                                                </div>


                                                <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                                                    <label for="usu_apellido">Apellido:</label>
                                                    <input type="text" class="form-control"name="usu_apellido" value="<?= $usuario->getApellido() ?>" >
                                                    <span class="fa fa-dollar form-control-feedback right" aria-hidden="true"></span>
                                                </div>

                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-5">

                                                        <div class="botones">

                                                            <input type="submit" class="btn bg-primary">   
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

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
} else if ($_SESSION['rol'] == "usuario") {
    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaUsuario.php';
} else {
    include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
}
?>