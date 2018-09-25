<!DOCTYPE html>
<?php
if ($_SESSION['rol'] === "administrador") {
    ?>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Vituta</title>
            <link rel="stylesheet" href="<?=CARPETA_RECURSOS?>../archivos/alerts/sweetalert2.min.css"/>
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
            <style>
                .row{
                    padding: 10px;
                }
            </style>
        <body class="nav-md"> 
            <div class="container body ">
                <div class="main_container">
                    <div class="col-md-3 left_col">
                        <div class="left_col scroll-view">
                            <div class="navbar nav_title" style="border: 0;">
    <!--                            <a href=""><i class=""></i><span></span></a>-->
    <!--                            <a href=""><i class="icon icon-paper-plane"><img src="../archivos/avioncito.png" alt="" style="width: 65px; height: 50px; margin: 2px 5px 5px 0px; "/></i><span>Vituta!</span></a>-->
                                <a href="index.html" class="site_title"><img src="<?=CARPETA_RECURSOS?>../archivos/avioncito.png" alt="" style="width: 65px; height: 45px; margin: 2px 5px 5px -5px; "/><span> Vituta!</span></a>

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
                                                <li><a href="<?= CONSULTAR_RESERVAS_PENDIENTES['url'] ?>">Consultar Reservas Pendientes</a></li>

                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-gears"></i> Configuracciones  <span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                              <li><a href="<?= REGISTRAR_GUIA_SEGURO['url'] ?>">Modificar Valor Guía / Seguro</a></li>
                                                <li><a href="tables_dynamic.html">Table</a></li>
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
                    <div class="right_col padin" role="main" >
                        <div class="row" id="menu">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="dashboard_graph">

                                </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="pull-right">
                            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
                        </div>
                        <div class="clearfix"></div>
                    </footer>
                </div>


                <!--  <header>
                            <img src="../archivos/Logo.png" alt=""/>
                            <div class="contenedor">
                                <div class="vituta">
                                   
                                </div>
                                <nav>
                                    <ul>
                                        <li><a href="<?= RUTA_PRINCIPAL['url'] ?>"><span class="primero"><i class="icon icon-paper-plane"></i></span>Iniciar Sesión</a></li>
                                        <li><a href="<?= ACTIVIDAD['url'] ?>"><span class="segundo"><i class="icon icon-suitcase"></i></span>Gestionar Actividad</a></li>
                                        <li><a href="<?= GESTIONAR_LUGAR['url'] ?>"><span class="tercero"><i class="icon icon-user"></i></span>Gestionar Lugar</a></li>
                                        <li><a href="#"><span class="cuarto"><i class="icon icon-paper-plane"></i></span>Administrador</a>
                
                                            <ul>
                                                <li><a href="<?= MOSTRAR_PREDETERMINADO['url'] ?>"><span class="icon icon-suitcase" id="primero"></span>Registrar paquete predeterminado(Admin)</a></li>
                                                <li><a href="<?= AJAX_PREDETERMINADO['url'] ?>"><span class="icon icon-suitcase"></span>Gestion paquete Predeterminado(Admin)</a></li>
                                                <li><a href="<?= MODIFICAR_VISTA['url'] ?>"><span class="icon icon-user"></span>Modificar Usuario</a></li>
                                                <li><a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>"><span class="icon icon-user"></span>Registrar Actividad</a></li>
                                                <li><a href="<?= REGISTRAR_LUGAR['url'] ?>"><span class="icon icon-user"></span>Registrar Lugar</a></li>
                
                                            </ul>
                                        </li>
                                        <li><a href="<?= CERRAR_SESION['url'] ?>"><span class="quinto"><i class="icon icon-user"></i></span>Cerrar Sesión</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </header>-->


                <!--
                <div id="menu">
                    <div id="seleccion">
                        <ul class="button" >
                            <li><a href="<?= RUTA_PRINCIPAL['url'] ?>">Inicio</a></li>
                            // <li><a href="<?= MOSTRAR_PREDETERMINADO['url'] ?>">Registrar paquete predeterminado(Admin)</a></li>
                             <li><a href="<?= CONSULTAR_PREDETERMINADO['url'] ?>">Consultar Paquetes (Usuario)</a></li>
                            //<li><a href="<?= AJAX_PREDETERMINADO['url'] ?>">Gestion paquete Predeterminado(Admin)</a></li>
                            <li><a href="<?= INICIO_SESION['url'] ?>">Iniciar Sesión</a></li>
                            //<li><a href="<?= MODIFICAR_VISTA['url'] ?>">Modificar Usuario</a></li>
                            //<li><a href="<?= REGISTRAR_ACTIVIDAD['url'] ?>">Registrar Actividad</a></li>
                            <li><a href="<?= ACTIVIDAD['url'] ?>">Gestionar Actividad</a></li>
                            //<li><a href="<?= REGISTRAR_LUGAR['url'] ?>">Registrar Lugar</a></li>
                            <li><a href="<?= GESTIONAR_LUGAR['url'] ?>">Gestionar Lugar</a></li>
                            <li><a href="<?= CREAR_RESERVA_PAQUETE_PREDETERMINADO['url'] ?>">Reservar paquete predeterminado</a></li>
                            <li><a href="<?= CONSULTAR_RESERVAS_USUARIO['url'] ?>">Consulta tus reservas</a></li>
                            <li><a href="<?= CERRAR_SESION['url'] ?>">Cerrar Sesión</a></li>
        
                        </ul>
                    </div>
        
        
        
                </div>-->
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/jquiry/dist/jquery.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/fastclick.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/fastclick.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/Chart.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/gauge.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/bootstrap-progressbar.min.js" type="text/javascript"></script>
                <script src="<?= CARPETA_RECURSOS ?>cssGlobal/bootstrap/js/lib/custom.min.js" type="text/javascript"></script>
                <script src="<?=CARPETA_RECURSOS?>../archivos/alerts/sweetalert2.min.js"></script>
                <script type="text/javascript">
                    $('#sidebar-menu li ul li a ').on('click', eventoClick);
                    function cargarVista(url) {
                        $.get(url, procesarRespuesta);
                    }
                    function procesarRespuesta(html) {
                        $('#menu').empty().append(html);
                    }
                    function eventoClick(e) {
                        detener(e);
                        var vinculo = $(this);
                        var url = vinculo.attr('href');
                        cargarVista(url);
                    }
                    function detener(e) {
                        if (e.preventDefault) {
                            e.preventDefault();
                        }
                        if (e.stopPropagation) {
                            e.stopPropagation();
                        }
                        if (e.returnValue) {
                            e.returnValue = false;
                        }
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