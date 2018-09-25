<?php

namespace negocio\controlador;

use persistencia\dao\GuiaDAO;
use negocio\generico\GenericoControlador;
use persistencia\vo\GuiaVO;
use persistencia\vo\SeguroVO;
use persistencia\dao\SeguroDAO;
use const CARPETA_PRINCIPAL;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GuiaSeguroControlador
 *
 * @author Fernando
 */
class GuiaSeguroControlador extends GenericoControlador {

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->seguroDAO = new SeguroDAO($cnn);
        $this->guiaDAO = new GuiaDAO($cnn);
    }

    public function indexInfoGuia() {
        $consultaGuia = $this->guiaDAO->consultar();
        $consultaSeguro = $this->seguroDAO->consultar();
        include_once CARPETA_PRINCIPAL . '/vista/InfoGuia.php';
    }

    public function insertarGuiaSeguro() {
        $precioGuia = $_POST['precioGuia'];
        $precioSeguro = $_POST['precioSeguro'];
        $opcion = 0;
        if (empty($precioGuia)) {
            $resultadoGuia = 0;
            $opcion = 0;
        } else {
            $guiaVO = new GuiaVO();
            $guiaVO->setValor_guia($precioGuia);
            $guiaVO->setFecha_modificacion((date("Y/m/d")));
            $resultadoGuia = $this->guiaDAO->insertar($guiaVO);
            $opcion = 1;
        }
        if (empty($precioSeguro)) {
            $resultadoSeguro = 0;
            if ($opcion == 1) {
                $opcion = 1;
            } else {
                $opcion = 0;
            }
        } else {
            $seguroVO = new SeguroVO();
            $seguroVO->setValor_seguro($precioSeguro);
            $seguroVO->setFecha_mod_seguro((date("Y/m/d")));
            $resultadoSeguro = $this->seguroDAO->insertar($seguroVO);
            $opcion = 1;
        }
        return $opcion;
    }

}
