<?php
include 'personaClass.php';
include 'funciones.php';
include 'cuentabancaria.php';
$p=new Persona("Franco","Ortiz","DNI",40182652);
cargarNuevoUsuario($p);
$resp=1;
while($resp!=0){
    $resp=mainMenu();
    switch($resp){
        case 1:
            pedirDatos();
        case 2:
            //
        default:
            //
    }
}
?>