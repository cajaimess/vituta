<?php

namespace persistencia\dao;

use PDO;
use persistencia\generico\GenericoDAO;

class ActividadDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'actividad');
    }

    public function consultar() {
        $sql = "select * from actividad";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultarActividad() {
        $sql = "select * from actividad where estado='Activo'";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $array = $sentencia->fetchAll();
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public function eliminarAc($id) {
        try {

            $sql = "update actividad set estado='Inactivo' where id_actividad = :id ";
            $sentencia = $this->cnn->prepare($sql);
            $sentencia->bindParam(':id', $id);
            $sentencia->execute();
        } catch (Exception $ex) {
            
        }
    }

    public function consultarActividadesDependiendo($value) {
        $sql = "select * from actividad where id_actividad= " . $value;
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function modificar() {
        print_r($_POST['valor']);
        try {
            $sql = 'update actividad set nombre_actividad = :nombre, categoria = :categoria,disponibilidad=:disponibilidad,valor_actividad =:valor where id_actividad = :id ';
            $sentencia = $this->cnn->prepare($sql);
            $array = $sentencia->execute($_POST);
        } catch (Exception $ex) {
            
        }
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public function crearCarpeta($nombreActividad) {
        $ruta = CARPETA_PRINCIPAL . '/archivos/act_' . $nombreActividad;
        mkdir($ruta, 0777);
        
    }

}
