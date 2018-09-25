<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericoDAO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GuiaSeguroDAO
 *
 * @author Fernando
 */
class GuiaDAO extends GenericoDAO {

    public function __construct(&$cnn) {
        parent::__construct($cnn, 'valor_guia');
    }

    public function consultar() {
        $sql = "select id_valor_guia,valor_guia,fecha_modificacion from valor_guia
ORDER BY id_valor_guia DESC limit 5";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado= $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

}
