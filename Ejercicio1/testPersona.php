<?php
include 'persona.php';
include 'funciones.php';
include 'cuentabancaria.php';
$resp=1;
while(is_numeric($resp) || $resp!=0){
    $resp=mainMenu();
    switch($resp){
        case 1:
            echo "Ingrese el nombre \n";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido \n";
            $apellido = trim(fgets(STDIN));
            echo "Ingrese el tipo de documento \n";
            $tipo = trim(fgets(STDIN));
            echo "Ingrese el número de documento \n";
            $dni = trim(fgets(STDIN));
            $p = new Persona;
            cargarNuevoUsuario($p);
        case 2:
            //
        default:
            //
    }
}
?>