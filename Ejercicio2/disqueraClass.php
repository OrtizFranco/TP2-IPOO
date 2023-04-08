<?php
// atributos: $hora_desde y $hora_hasta (que indican el horario de
//atención de la tienda), $estado (abierta o cerrada), $dirección y $dueño.
class Disquera{

    private $hora_desde;
    private $hora_hasta;
    private $estado;
    private $direccion;
    private $duenio;

    public function __construct($hora_desde,$hora_hasta,$estado,$direccion, $duenio){
        $this->hora_desde = $hora_desde;
        $this->hora_hasta = $hora_hasta;
        $this->estado = $estado;
        $this->direccion = $direccion;
        $this->duenio = $duenio;
    }
    // metodos de acceso
    public function setHoraDesde($hr){
        $this->hora_desde=$hr;
    }
    public function getHoraDesde(){
        return $this->hora_desde;
    }
    public function setHoraHasta($hr){
        $this->hora_hasta=$hr;
    }
    public function getHoraHasta(){
        return $this->hora_hasta;
    }
    public function setEstado($estado){ 
        $this->estado= $estado;
    }
    public function getEstado(){
        return $this->estado;
    }
    public function setDireccion($dir){
        $this->direccion=$dir;
    }
    public function getDireccion(){
        return $this -> direccion;
    }
    public function setDuenio($d){
        $this->duenio=$d;
    }
    public function getDuenio(){
        return $this->duenio;
    }
    //dentroHorarioAtencion($hora,$minutos): que dada una hora y minutos retorna
    // true si la tienda debe
    //encontrarse abierta en ese horario y false en caso contrario.
    public function dentroDeHorario($hr){
        $horario=false;
        if($hr>= $this->hora_desde && $hr<$this->hora_hasta){
            $horario=true;
        }
        return $horario;
    }
    //abrir diskera, le llega horario, cambia el estado
    public function abrirDisquera($hr){
        $this->estado=false;
        if($hr<=$this->hora_desde && $hr>=$this->hora_desde-1 && $hr<=$this->hora_desde+1){
            $this->estado=true;
        }
    }
    //cerrar diskera
    public function cerrarDisquera($hr){
        if($hr>=$this->hora_hasta){
            $this->estado=false;
            
        }
    }
    public function __toString(){
        if($this->estado){
            $est="abierto";
        }else{
            $est="cerrado";
        }
        $txt = "La Disquera abre de ".$this->getHoraDesde()." y cierra ".$this->getHoraHasta()."\n
        * La dirección es ".$this->getDireccion()."\n
        * Actualmente se encuentra ".$est."\n";
        return $txt;
    }
}

?>