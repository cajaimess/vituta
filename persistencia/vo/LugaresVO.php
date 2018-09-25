<?php

namespace persistencia\vo;

use persistencia\generico\IGenericoVO;

class LugaresVO implements IGenericoVO {

    private $id_lugar;
    private $actividad_id_actividad;
    private $nombre_lugar;
    private $latitud;
    private $longitud;
    private $altura_nivel_mar;
    private $descripcion;
    private $disponibilidad;
    private $estado;
    private $foto_lugar_1;
    private $foto_lugar_2;
    private $foto_lugar_3;
    private $foto_lugar_4;

    function getId_lugar() {
        return $this->id_lugar;
    }

    function getAtividad_id_actividad() {
        return $this->actividad_id_actividad;
    }

    function getNombre_lugar() {
        return $this->nombre_lugar;
    }

    function getAltura_nivel_mar() {
        return $this->altura_nivel_mar;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getDisponibilidad() {
        return $this->disponibilidad;
    }

    function setId_lugar($id_lugar) {
        $this->id_lugar = $id_lugar;
    }

    function setActividad_id_actividad($actividad_id_actividad) {
        $this->actividad_id_actividad = $actividad_id_actividad;
    }

    function setNombre_lugar($nombre_lugar) {
        $this->nombre_lugar = $nombre_lugar;
    }

    function setAltura_nivel_mar($altura_nivel_mar) {
        $this->altura_nivel_mar = $altura_nivel_mar;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setDisponibilidad($disponibilidad) {
        $this->disponibilidad = $disponibilidad;
    }
    
    function getEstado() {
        return $this->estado;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function getLatitud() {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }

    function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }

    
    function getFoto_lugar_1() {
        return $this->foto_lugar_1;
    }

    function getFoto_lugar_2() {
        return $this->foto_lugar_2;
    }

    function getFoto_lugar_3() {
        return $this->foto_lugar_3;
    }

    function getFoto_lugar_4() {
        return $this->foto_lugar_4;
    }

    function setFoto_lugar_1($foto_lugar_1) {
        $this->foto_lugar_1 = $foto_lugar_1;
    }

    function setFoto_lugar_2($foto_lugar_2) {
        $this->foto_lugar_2 = $foto_lugar_2;
    }

    function setFoto_lugar_3($foto_lugar_3) {
        $this->foto_lugar_3 = $foto_lugar_3;
    }

    function setFoto_lugar_4($foto_lugar_4) {
        $this->foto_lugar_4 = $foto_lugar_4;
    }

        public function getAtributos() {
        $info = array();
        $info['id_lugar'] = $this->id_lugar;
        $info['actividad_id_actividad'] = $this->actividad_id_actividad;
        $info['nombre_lugar'] = $this->nombre_lugar;
        $info['latitud'] = $this->latitud;
        $info['longitud'] = $this->longitud;
        $info['altura_nivel_mar'] = $this->altura_nivel_mar;
        $info['descripcion'] = $this->descripcion;
        $info['disponibilidad'] = $this->disponibilidad;
        $info['estado'] = $this->estado;
        $info['foto_lugar_1'] = $this->foto_lugar_1;
        $info['foto_lugar_2'] = $this->foto_lugar_2;
        $info['foto_lugar_3'] = $this->foto_lugar_3;
        $info['foto_lugar_4'] = $this->foto_lugar_4;
        return $info;
    }

    public function convertir($info) {
        $atributos = array_keys(get_object_vars($this));
        unset($atributos['listaActividad']);
        foreach ($atributos as $nombreAtributo) {
            if (isset($info['lugar' . $nombreAtributo])) {
                $this->$nombreAtributo = $info['lugar' . $nombreAtributo];
            }
        }
    }
}
