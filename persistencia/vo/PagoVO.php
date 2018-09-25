<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class PagoVO implements IGenericoVO{
    
    private $id_pago;
    private $estado;
    private $mensaje_respuesta;
    private $codigo_respuesta;
    private $descripcion;
    private $reserva_id_reserva;
    
    function getId_pago() {
        return $this->id_pago;
    }

    function getEstado() {
        return $this->estado;
    }

    function getMensaje_respuesta() {
        return $this->mensaje_respuesta;
    }

    function getCodigo_respuesta() {
        return $this->codigo_respuesta;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getReserva_id_reserva() {
        return $this->reserva_id_reserva;
    }

    function setId_pago($id_pago) {
        $this->id_pago = $id_pago;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setMensaje_respuesta($mensaje_respuesta) {
        $this->mensaje_respuesta = $mensaje_respuesta;
    }

    function setCodigo_respuesta($codigo_respuesta) {
        $this->codigo_respuesta = $codigo_respuesta;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setReserva_id_reserva($reserva_id_reserva) {
        $this->reserva_id_reserva = $reserva_id_reserva;
    }

        
    
    public function getAtributos() {
        
          $info = array();
        $info['id_pago'] = $this->id_pago;
        $info['estado'] = $this->estado;
        $info['mensaje_respuesta'] = $this->mensaje_respuesta;
        $info['codigo_respuesta'] = $this->codigo_respuesta;
        $info['descripcion'] = $this->descripcion;
        return $info;
    }
    
    
    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaPago']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['pag_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['pag_' . $nombreAtributo];
            }
        }
    }


//put your code here
}
