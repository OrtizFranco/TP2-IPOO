<?php
$usuarios = [];
function cargarNuevoUsuario($persona){
    arraypush($usuarios,$persona);
    echo "Carga exitosa!";
}

class Persona{
    private $nombre;
    private $apellido;
    private $tipo;
    private $dni;

    public function __constructor($nombre,$apellido,$tipo,$dni){
        $this-> nombre = $nombre;
        $this-> apellido = $apellido;
        $this-> tipo = $tipo;
        $this-> dni = $dni;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nombre){
        $this->nombre= $nombre;
    }
    //
     public function getApellido(){
        return $this->apellido;
    }
    public function setApellido($apellido){
        $this->apellido= $apellido;
    }
    //
     public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tipo){
        $this->tipo= $tipo;
    }
    //
     public function getDni(){
        return $this->dni;
    }
    public function setDni($dni){
        $this->dni= $dni;
    }
}

?>