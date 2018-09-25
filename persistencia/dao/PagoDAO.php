<?php

namespace persistencia\dao;
use PDO;
use persistencia\generico\GenericoDAO;

class PagoDAO extends GenericoDAO {
   
    public function __construct(&$cnn) {
        parent::__construct($cnn, 'pago');
    }
    
}
