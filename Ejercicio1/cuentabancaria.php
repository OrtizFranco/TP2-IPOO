<?php

class CuentaBancaria{
    private $numDeCuenta;
    private $personaTitular;
    private $saldoActual;
    private $interesAnual;
    public function __constructor($nroCuenta,$objPersona,$saldoActual,$interesAnual){
        $this->numDeCuenta = $nroCuenta;
        $this -> personaTitular=$objPersona;
        $this->saldoActual=$saldoActual;
        $this->$interesAnual=$interesAnual;
    }
    //metodos de acceso
    public function getNumDeCuenta(){
        return $this->numDeCuenta;
    }
    public function setNumDeCuenta($numDeCuenta){
        $this->getNumDeCuenta= $numDeCuenta;
    }
    //
    public function getSaldoActual(){
        return $this->saldoActual;
    }
    public function setSaldoActual($SA){
        $this->getSaldoActual= $SA;
    }
    //
    public function getInteresAnual(){
        return $this->interesAnual;
    }
    public function setInteresAnual($IA){
        $this->interesAnual= $IA;
    }
    //
    public function getTitular(){
        return $this->personaTitular;
    }
    public function setTitular($objPersona){
        $this->personaTitular= $objPersona;
    }
    //metodos de la clase
    public function actualizarSaldo(){
        $act=$this->getSaldoActual();
        $IA=$this->getInteresAnual();
        $IA = $IA / 365;
        $act = $act + $act*$IA;
        return $act;
    }
    public function depositar($cant){
        $this->saldoActual+=$cant;
    }
    public function retirar($cant){
        if($this->saldoActual>0 && $this->saldoActual>=$cant){
            $this->saldoActual -= $cant;
            return true;
        }else{
            return "No tiene el saldo suficiente para realizar la operación";
        }
    }
    public function __toString(){
        $objTitular=$this->titular;
        $txt = "Nro de cuenta: ". $this->getNumDeCuenta. "\n
         saldo actual: ". $this->getSaldoActual. "\n
          documento unico: ". $objTitular. "\n
           interes anual: ". $this->getInteresAnual;
        return $txt;
    }

}


?>
