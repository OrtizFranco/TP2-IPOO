<?php
include 'disqueraClass.php';
include 'personaClass.php';
$p = new Persona("fran","ortiz","dni", 40128652);
$disk1 = new Disquera(9,18,false,"Calle falsa 123",$p);
// atributos: $hora_desde y $hora_hasta (que indican el horario de
//atención de la tienda), $estado (abierta o cerrada), $dirección y $dueño.

echo "comprobar horario de atención\n
ingrese una hora\n";
$test = trim(fgets(STDIN));
$test= $disk1->dentroDeHorario($test);
if ($test){
    echo "Abierto en ese horario!\n";
}else{
    "Cerrado en ese horario\n";
}

echo "Ingrese una hora para abrir disquera \n";
$test = trim(fgets(STDIN));
$test = $disk1->abrirDisquera($test);

if ($test){
    echo "Estado cambiado a -> abierto\n";
}else {
    echo "No podemos abrir en ese horario\n";
}

echo "Ingrese una hora y comprobaremos de cerrar\n";
$test = trim(fgets(STDIN));

$disk1->cerrarDisquera($test);

if ($disk1->getEstado()){
    echo "No podemos cerrar en ese horario\n";
}else {
    echo "Estado cambiado a -> cerrado";
}

echo "Información de la disquetera \n";
echo $disk1;

?>