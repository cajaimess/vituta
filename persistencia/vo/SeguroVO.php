<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class SeguroVO implements IGenericoVO {

    private $id_valor_seguro;
    private $valor_seguro;
    private $fecha_mod_seguro;

    function getFecha_mod_seguro() {
        return $this->fecha_mod_seguro;
    }

    function setFecha_mod_seguro($fecha_mod_seguro) {
        $this->fecha_mod_seguro = $fecha_mod_seguro;
    }

    function getId_valor_seguro() {
        return $this->id_valor_seguro;
    }

    function getValor_seguro() {
        return $this->valor_seguro;
    }

    function setId_valor_seguro($id_valor_seguro) {
        $this->id_valor_seguro = $id_valor_seguro;
    }

    function setValor_seguro($valor_seguro) {
        $this->valor_seguro = $valor_seguro;
    }

    public function getAtributos() {
        $info = array();
        $info['id_valor_seguro'] = $this->id_valor_seguro;
        $info['valor_seguro'] = $this->valor_seguro;
        $info['fecha_mod_seguro'] = $this->fecha_mod_seguro;
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
