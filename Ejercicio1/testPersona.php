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
            break;
        case 2:
            mostrarDatos($arrayPersonas);
            break;
        case 3:
            $arrayPersonas=setUsuario($arrayPersonas);
            break;
        case 4:
            $cuentasBancarias=crearCuentaBancaria($arrayPersonas,$cuentasBancarias);
            break;
        case 5:
            
            break;
        default:
            echo "";
    }
    
}
?>