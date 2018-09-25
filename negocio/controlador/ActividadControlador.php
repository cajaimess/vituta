<?php

namespace negocio\controlador;

use negocio\generico\GenericoControlador;
use persistencia\dao\ActividadDAO;
use persistencia\vo\ActividadVO;
use const CARPETA_PRINCIPAL;

class ActividadControlador extends GenericoControlador {

    /**
     *
     * @var ActividadDAO 
     */
    private $ActividadDAO;

    public function __construct(&$cnn) {
        parent::__construct($cnn);
        $this->ActividadDAO = new ActividadDAO($cnn);
    }

    public function indexActividad() {
        include_once CARPETA_PRINCIPAL . '/vista/RegistrarActividad.php';
    }

    public function insertarActividad() {
        $nombreActividad = $_POST['nombre'];
 
        for ($i=1; $i<=4 ; $i++) {
            $nombre[$i]=$nombreActividad . '_foto'.$i;
            $foto[$i]=$_FILES['foto_act_'.$i];
        }
        
        $ruta = CARPETA_PRINCIPAL . '/archivos/act_' . $nombreActividad;

        if (is_dir($ruta) == TRUE) {
            foreach ($nombre as $key => $value) {
                $this->cargarArchivo($nombreActividad, $value, $ruta,$foto[$key]);
            }
        } else {
            $carpeta = $this->ActividadDAO;
            $carpeta->crearCarpeta($nombreActividad);
            foreach ($nombre as $key => $value) {
                $this->cargarArchivo($nombreActividad, $value, $ruta,$foto[$key]);
            }
        }
        $final=PROYECTO.'archivos/act_'.$nombreActividad;
        $actividad = new ActividadVO();
        $actividad->setNombre_actividad($_POST['nombre']);
        $actividad->setDuracion_aproximada($_POST['duracion']);
        $actividad->setCategoria($_POST['categoria']);
        $actividad->setEdad_recomendada($_POST['edad']);
        $actividad->setValor_actividad($_POST['valor']);
        $actividad->setRecomendacion($_POST['recomendacion']);
        $actividad->setDescripcion($_POST['descripcion']);
        $actividad->setDisponibilidad('Disponible');
        $actividad->setEstado('Activo');
        $actividad->setFoto_act_1($final.'/'.$nombre[1].'.jpeg');
        $actividad->setFoto_act_2($final.'/'.$nombre[2].'.jpeg');
        $actividad->setFoto_act_3($final.'/'.$nombre[3].'.jpeg');
        $actividad->setFoto_act_4($final.'/'.$nombre[4].'.jpeg');
        $datos = $this->ActividadDAO->insertar($actividad);
        if (isset($datos)) {
            print_r("<script type='text/javascript'>alert('Actividad registrada con exito');</script>");
        } else {
            print_r("<script type='text/javascript'>alert('Actividad no registrada');</script>");
        }
    }

    public function indexModificar() {
        include_once CARPETA_PRINCIPAL . '/vista/GestionarActividad.php';
    }

    public function consultarAc() {
        $consulta = new ActividadDAO($this->cnn);
        $lista = $consulta->consultarActividad();
    }

    public function eliminarActividad() {
        $id = $_POST['id'];
        $consulta = new ActividadDAO($this->cnn);
        $lista = $consulta->eliminarAc($id);
    }

    public function modificar() {
        $consulta = new ActividadDAO($this->cnn);
        $lista = $consulta->modificar();
    }
    
    private function cargarArchivo($nombreActividad,$nombre1,$ruta,$foto){
        $ruta = CARPETA_PRINCIPAL . '/archivos/act_' . $nombreActividad . '/' . $nombre1 . '.jpeg';
            move_uploaded_file($foto['tmp_name'], $ruta);
            
    }

}
