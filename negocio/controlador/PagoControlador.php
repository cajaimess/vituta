<?php

use negocio\generico\GenericoControlador;
use persistencia\dao\PagoDAO;
use persistencia\dao\ReservaPredeterminadoDAO;
use persistencia\vo\PagoVO;

class PagoControlador extends GenericoControlador {

    private $pagoDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->pagoDAO = new PagoDAO($cnn);
    }

    public function confirmacion() {
        $estado = $_POST['state_pol'];
        $mensaje = $_POST['response_message_pol'];
        $codigo = $_POST['response_code_pol'];
        $descripcion = $_POST['description'];
        $pagos = new PagoVO();
        $pagos->setEstado($estado);
        $pagos->setMensaje_respuesta($mensaje);
        $pagos->setCodigo_respuesta($codigo);
        $pagos->setDescripcion($descripcion);
        if ($estado === 4) {
            ?>

            <?= RESERVA_INSERTAR['url'] ?>
            <?=

            $this->pagoDAO->insertar($pagos);
        }  else {
            echo "algo paso";
        }
    }

}
?>