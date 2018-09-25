<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\ActividadDAO;
use persistencia\dao\LugarDAO;
use persistencia\vo\LugaresVO;
use const CARPETA_PRINCIPAL;

class LugarControlador extends GenericoControlador {

    /**
     *
     * @var LugarDAO 
     */
    private $LugarDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->LugarDAO = new LugarDAO($cnn);
    }

    public function indexLugar() {
        $act = new ActividadDAO($this->cnn);
        $datos = $act->consultar();

        include_once CARPETA_PRINCIPAL . '/vista/RegistrarLugar.php';
    }

    public function insertarLugar() {
        $nombreLugar = $_POST['address'];
        
        for ($i=1; $i<=4 ; $i++) {
            $nombre[$i]=$nombreLugar . '_foto'.$i;
            $foto[$i]=$_FILES['foto_lugar_'.$i];
        }
        
        $ruta = CARPETA_PRINCIPAL . '/archivos/lugar_' . $nombreLugar;

        if (is_dir($ruta) == TRUE) {
            foreach ($nombre as $key => $value) {
                $this->cargarArchivo($nombreLugar, $value, $ruta,$foto[$key]);
            }
        } else {
            $carpeta = $this->LugarDAO;
            $carpeta->crearCarpeta($nombreLugar);
            foreach ($nombre as $key => $value) {
                $this->cargarArchivo($nombreLugar, $value, $ruta,$foto[$key]);
            }
        }
        $final=PROYECTO.'archivos/lugar_'.$nombreLugar;
        $lugar = new LugaresVO();
        $lugar->setActividad_id_actividad($_POST['actividad']);
        $lugar->setNombre_lugar($_POST['address']);
        $lugar->setLatitud($_POST['latitud']);
        $lugar->setLongitud($_POST['longitud']);
        $lugar->setAltura_nivel_mar("2.584 a 3.000 msnm");
        $lugar->setDescripcion($_POST['descripcion']);
        $lugar->setDisponibilidad('Disponible');
        $lugar->setEstado('Activo');
        $lugar->setFoto_lugar_1($final.'/'.$nombre[1].'.jpeg');
        $lugar->setFoto_lugar_2($final.'/'.$nombre[2].'.jpeg');
        $lugar->setFoto_lugar_3($final.'/'.$nombre[3].'.jpeg');
        $lugar->setFoto_lugar_4($final.'/'.$nombre[4].'.jpeg');
        $datos = $this->LugarDAO->insertar($lugar);
        print_r('Lugar registrado con exito.');
    }

    public function indexGestionarLugar() {
        include_once CARPETA_PRINCIPAL . '/vista/GestionarLugar.php';
    }

    public function Consultar() {
        $consulta = new LugarDAO($this->cnn);
        $lista = $consulta->consultarLugar();
        print_r($lista);
    }

    public function eliminar() {
        try {
            $consulta = new LugarDAO($this->cnn);
            $id = $_POST['id'];
            $lista = $consulta->eliminarlugar($id);
        } catch (Exception $ex) {
            print_r($ex);
        }
        header('Content-Type:application/json');
        echo json_encode($array);
    }

    public function modificar() {
        $consulta = new LugarDAO($this->cnn);
        $lista = $consulta->modificar();
    }

    private function cargarArchivo($nombreLugar, $nombre1, $ruta, $foto) {
        $ruta = CARPETA_PRINCIPAL . '/archivos/lugar_' . $nombreLugar . '/' . $nombre1 . '.jpeg';
        move_uploaded_file($foto['tmp_name'], $ruta);
    }

}
