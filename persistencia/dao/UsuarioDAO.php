<?php

namespace persistencia\dao;

use PDO;
use persistencia\conexion\Conexion;
use persistencia\generico\GenericoDAO;
use persistencia\vo\UsuarioVO;

class UsuarioDAO extends GenericoDAO {

    public function __construct($cnn) {
        parent::__construct($cnn, 'usuario');
    }

    public function autenticar($correo, $clave) {
        $sql = "select * from usuario where correo = :correo AND clave = :clave ";
        $sentencia = $this->cnn->prepare($sql);
        $sentencia->bindParam(':correo', $correo);
        $sentencia->bindParam(':clave', $clave);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        if (empty($resultado)) {
            return;
        }
        $registro = $resultado[0];
        $usuario = new UsuarioVO();
        $usuario->setId_usuario($registro['id_usuario']);
        $usuario->setNombre($registro['nombre']);
        $usuario->setApellido($registro['apellido']);
        $usuario->setCorreo($registro['correo']);
        $usuario->setGenero($registro['genero']);
        $usuario->setClave($registro['clave']);
        $usuario->setTelefono($registro['telefono']);
        $usuario->setTipo_documento($registro['tipo_documento']);
        $usuario->setNumero_documento($registro['numero_documento']);
        $usuario->setRoll($registro['rol']);
        $_COOKIE['usuario'] = $usuario->getRoll();
        $_SESSION['id_usuario'] = $registro['id_usuario'];
        $_SESSION['rol'] = $registro['rol'];
        $_SESSION['correo'] = $registro['correo'];
        $_SESSION['usuario'] = $registro['rol'];
        return $usuario;
    }

    public function consultar() {
        $sql = "select * from usuario";
        $sql = $this->cnn->prepare($sql);
        $resultado = $sql->execute();
        return $resultado;
    }

    function ConsultarContraseña($electronico) {
        $sql = "select clave from usuario where correo = '" . $electronico . "' ";
        $cnn = Conexion::conectar();
        $sentencia = $cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll(PDO::FETCH_OBJ);
        foreach ($resultado as $value) {
            if (isset($value->clave)) {
                $sql2 = "update usuario set estado = true where correo = '" . $electronico . "' ";
                $sentencia2 = $cnn->prepare($sql2);
                $sentencia2->execute();
                return $value;
            } else {
                $value = NULL;
            }
        }
    }

    function ConsultarEstado($electronico) {
        $sql = "select estado from usuario where correo = '" . $electronico . "' ";
        $cnn = Conexion::conectar();
        $sentencia = $cnn->prepare($sql);
        $sentencia->execute();
        $resultado = $sentencia->fetchAll();
        return $resultado;
    }

    function CambiarContraseña($correo, $contraseñaNueva) {
        $contraseña = md5($contraseñaNueva);
        $sql = "update usuario set clave = '" . $contraseña . "' , estado = false where correo = '" . $correo . "' ";
        $cnn = Conexion::conectar();
        $sentencia = $cnn->prepare($sql);
        $resultado = $sentencia->execute();
        return $resultado;
    }

}
