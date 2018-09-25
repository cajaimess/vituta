<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class GuiaVO implements IGenericoVO {

    private $id_valor_guia;
    private $valor_guia;
    private $fecha_modificacion;
    
    function getId_valor_guia() {
        return $this->id_valor_guia;
    }

    function getValor_guia() {
        return $this->valor_guia;
    }

    function getFecha_modificacion() {
        return $this->fecha_modificacion;
    }

    function setId_valor_guia($id_valor_guia) {
        $this->id_valor_guia = $id_valor_guia;
    }

    function setValor_guia($valor_guia) {
        $this->valor_guia = $valor_guia;
    }

    function setFecha_modificacion($fecha_modificacion) {
        $this->fecha_modificacion = $fecha_modificacion;
    }

                    
    public function getAtributos() {
        $info = array();
        $info['id_valor_guia'] = $this->id_valor_guia;
        $info['valor_guia'] = $this->valor_guia;
        $info['fecha_modificacion'] = $this->fecha_modificacion;
        return $info;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaGuia']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['gui_' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['gui_' . $nombreAtributo];
            }
        }
    }
}
