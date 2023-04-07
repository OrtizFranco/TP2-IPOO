<?php
include 'personaClass.php';
include 'funciones.php';
include 'cuentabancaria.php';
$arrayPersonas=[];
$cuentasBancarias=[];
$p=new Persona("Franco","Ortiz","DNI",40182652);
array_push($arrayPersonas,$p); $nro=34234; $saldo=199988888; $ia=10;
$cuenta1 = new CuentaBancaria ($nro, $p, $saldo,$ia);
array_push($cuentasBancarias,$cuenta1);
$resp=1;
while($resp!=0){
    $resp=mainMenu();
    switch($resp){
        case 0:
            break;
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
            $cuentasBancarias=modificarCuentas($cuentasBancarias);
            break;
        default:
        echo "opción inválida";
        break;
    }
    
}
?>