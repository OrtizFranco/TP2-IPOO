<?php

/*ejercicio 16 tp1
Cree una clase Libro que tenga los atributos ISBN, titulo, año de edición, editorial, nombre y apellido
del autor. Defina en la clase los siguientes métodos*/

class Libro{
private $ISBN;
private $titulo;
private $anioDeEdicion;
private $editorial;
private $autor;
private $nroPaginas;
private $sinopsis;
//constructor
public function __construct($ISBN,$titulo,$anioDeEdicion,$editorial,$autor){
    $this-> ISBN = $ISBN;
    $this-> titulo = $titulo;
    $this-> anioDeEdicion = $anioDeEdicion;
    $this-> editorial = $editorial;
    $this-> autor = $autor;
}
// metodos de acceso
public function setISBN($ISBN){
    $this->ISBN=$ISBN;
}
public function getISBN(){
    return $this->ISBN;
}
//
public function setTitulo($titulo){
    $this->titulo=$titulo;
}
public function getTitulo(){
    return $this->titulo;
}
//

public function setAnioDeEdicion($anio){
    $this->anioDeEdicion=$anio;
}
public function getAnioDeEdicion(){
    return $this->anioDeEdicion;
}
//

public function setEditorial($editorial){
    $this->editorial=$editorial;
}
public function getEditorial(){
    return $this->editorial;
}

public function setAutor($autor){
    $this->autor=$autor;
}
public function getAutor(){
    return $this->autor;
}
public function __toString(){
    $txt= "El libro ".$tihs->getTitulo()." del autor ".$this->getNomYApeDeAutor()." pertenece a la editorial ".$this->getEditorial()."\n
    * año de edición: ".$this->getAnioDeEdicion()."\n
    * ISBN: ".$this->getISBN();
    return $txt;
}
//indica si el libro pertenece a una editorial dada. Recibe como parámetro
//una editorial y devuelve un valor verdadero/falso.
public function perteneceEditorial($ed){
    if($this->getEditorial==$ed){
        return true;
    }else{
        return false;
    }
}
public function aniosDesdeEdicion(){
    $fechaAct = getdate();
    $anio= $fechaAct['year'];
    $anioDeEdicion=$this->getAnioDeEdicion;
    $tiempo= $anio-$anioDeEdicion;
    echo "Han pasado ".$tiempo." años desde que se editó el libro";
}

}

?>