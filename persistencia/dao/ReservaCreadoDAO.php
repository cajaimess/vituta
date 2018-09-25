<?php

namespace persistencia\dao;

use persistencia\generico\GenericoDAO;
use PDO;

class ReservaCreadoDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'reserva_creado');
    }

    public function consultar() {
        $sql = "select * from reserva_creado";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultarReservaCreado() {
        $sql = "select nombre_creado  , id_reserva_creado, fecha_servicio, cantidad_personas , valor_total 
            from reserva_creado 
            inner join paquete_creado
            on(paquete_creado_id_paquete_creado = id_paquete_creado)
            where usuario_id_usuario = " . $_SESSION['id_usuario'] . " and estado_reserva_cre ='activa'";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function editarEstadoReservaCreada($id) {
        $sql = "UPDATE reserva_creado SET estado_reserva_cre = 'cancelada' WHERE id_reserva_creado = $id";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        return $sql;
    }

    public function consultarReservasCreadoPendientes() {
        $sql = "select nombre_creado ,nombre, cantidad_guias , cantidad_personas , fecha_servicio, valor_total  
from reserva_creado inner join usuario  on usuario_id_usuario = id_usuario 
inner join paquete_creado on paquete_creado_id_paquete_creado = id_paquete_creado where estado_reserva_cre = 'activa'";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

    public function consultarFechasC() {
        $sql = "SELECT fecha_servicio,COUNT(fecha_servicio)as cantidad_reservas FROM reserva_creado group by fecha_servicio";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $resultado;
    }

}
