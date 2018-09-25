<?php
namespace persistencia\conexion;
use PDO;


class Conexion {
    public static function conectar(){
        $cnn= new PDO('pgsql: host=ec2-107-21-233-72.compute-1.amazonaws.com; dbname=dnufcsudkbr4m','oubnjifbuqmcgn', 'f6ac0eb045514a9a2f1a823b683999430bd2ee0c20ccaa74e70d14f1cc8b2b0a');
        $cnn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $cnn;
    }
}
