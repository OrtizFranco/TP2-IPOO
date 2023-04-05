<?php
include 'personaClass.php';
include 'funciones.php';
include 'cuentabancaria.php';
$arrayPersonas=[];
$cuentasBancarias=[];
$p=new Persona("Franco","Ortiz","DNI",40182652);
array_push($arrayPersonas,$p);
$resp=1;
while($resp!=0){
    $resp=mainMenu();
    switch($resp){
        case 1:
            $arrayPersonas=pedirDatos($arrayPersonas);
        case 2:
            mostrarDatos($arrayPersonas);
        case 3:
            $arrayPersonas=setUsuarios($arrayPersonas);
        case 4:
            $cuentasBancarias=crearCuentaBancaria($arrayPersonas,$cuentasBancarias);
        default:
            echo "";
    }
    
}
?>