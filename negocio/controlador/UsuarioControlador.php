<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\UsuarioDAO;
use persistencia\vo\UsuarioVO;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use const CARPETA_PRINCIPAL;

class UsuarioControlador extends GenericoControlador {

    /**
     *
     * @var UsuarioDAO 
     */
    private $usuarioDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->usuarioDAO = new UsuarioDAO($cnn);
    }

    public function indexRegistrar() {
        include_once CARPETA_PRINCIPAL . '/vista/RegistrarUsuario.php';
    }

    function indexCorreo() {
        include_once CARPETA_PRINCIPAL . '/vista/CorreoRecuperacion.php';
    }

    public function guardar() {

        $usuario = new UsuarioVO();
        $usuario->setNombre($_POST['usu_nombre']);
        $usuario->setApellido($_POST['usu_apellido']);
        $usuario->setTipo_documento($_POST['usu_tipo_documento']);
        $usuario->setCorreo($_POST['usu_correo']);
        $usuario->setGenero($_POST['usu_genero']);
        $usuario->setClave(md5($_POST['usu_clave']));
        $usuario->setNumero_documento($_POST['usu_numero_documento']);
        $usuario->setTelefono($_POST['usu_telefono']);
        $usuario->setEstado('false');
        $usuario->setRoll('usuario');
        $datos = $this->usuarioDAO->insertar($usuario);

        if (isset($datos)) {
            print_r("<script type'text/javascript'>alert('Nombre y precio registrados exitosamente');</script>");
            include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
        } else {
            print_r("<script type'text/javascript'>alert('Fallo en el registro');</script>");
        }
    }

    public function indexModificar() {
        $dao = new UsuarioDAO($this->cnn);
        $dao->consultar();
        include_once CARPETA_PRINCIPAL . '/vista/modificar.php';
    }

    public function modificarUsuario() {
        print_r($_SESSION['id_usuario']);
        $objUsuario = $_SESSION['usuario'];
        $objUsuario->setNombre($_POST['usu_nombre']);
        $objUsuario->setApellido($_POST['usu_apellido']);
        $dao = new UsuarioDAO($this->cnn);
        $dao->editar($objUsuario, "id_usuario=" . $objUsuario->getIdUsuario());
    }

    function autenticar() {
        $correo = $_POST['usu_correo'];
        $clave = $_POST['usu_clave'];
        $resultado = $this->usuarioDAO->ConsultarEstado($correo);
        if ($resultado[0][0] == 1) {
            $resultado1 = $this->usuarioDAO->autenticar($correo, $clave);
            if (empty($resultado1)) {
//                echo '1';
                include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
            } else {
//                echo '2';
                include_once CARPETA_PRINCIPAL . '/vista/CambioContraseña.php';
            }
        } else {
            $resultado1 = $this->usuarioDAO->autenticar($correo, md5($clave));
            if (empty($resultado1)) {
//                echo '3';
                include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
            } else {
                if ($_SESSION['rol'] == 'usuario') {
                    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaUsuario.php';
                } else {
                    include_once CARPETA_PRINCIPAL . '/vista/MenuVitutaAdministrador.php';
                }
            }
        }
    }

    function enviarCorreo() {
        require './PHPMailer-master/src/Exception.php';
        require './PHPMailer-master/src/PHPMailer.php';
        require './PHPMailer-master/src/SMTP.php';
        $electronico = $_POST['correo'];
        $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
        try {
            $value = $this->usuarioDAO->ConsultarContraseña($electronico);
            if (is_null($value)) {
                echo '0';
                } else {
                //Server settings
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = 'lauritavasquez13@gmail.com';                 // SMTP username
                $mail->Password = 'MICOMPLEMENTOVS23.';                       // SMTP username
                // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 465;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom('lauritavasquez13@gmail.com', 'Laura Andrea');
                $mail->addAddress($electronico, '');     // Add a recipient
                $mail->isHTML(true);
                // Set email format to HTML
                $mail->Subject = 'Contraseña de recuperación';
                $mail->Body = $value->clave;
                $mail->send();
                echo '1';
            }
        } catch (Exception $e) {
            print_r($e);
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }

    function cambiarContraseña() {
        $nuevaContraseña = $_POST['nuevaContraseña'];
        $correo = $_POST['correo'];
        $value = $this->usuarioDAO->CambiarContraseña($correo, $nuevaContraseña);
        if ($value == 1) {
            include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
        } else {
            echo 'Error al cambiar contraseña :-(';
        }
        
    }

    public function indexClave() {
        include_once CARPETA_PRINCIPAL . '/vista/OlvidoClave.php';
    }

    public function indexInicio() {
        include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
    }

    public function CerrarSesion() {
        session_destroy();
        include_once CARPETA_PRINCIPAL . '/vista/InicioSesion.php';
    }

}
