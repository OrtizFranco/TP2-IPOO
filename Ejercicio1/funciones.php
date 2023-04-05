<?php

function mainMenu(){
    echo "Bienvenid@!!!<\n>";
    echo "¿Qué operación desea realizar?<\n>";
    echo "Ingresar 1 para crear un nuevo usuario \n";
    echo "Ingresar 2 para ver los usuarios existentes<\n>";
    echo "Ingresar 3 para modificar algún usuario<\n>";
    echo "Ingrese 4 para crear una cuenta bancaria<\n>";
    echo "Ingrese 5 para eliminar o modificar una cuenta bancaria \n";
    echo "Ingrese 0 para salir del programa";
    $resp = trim(fgets(STDIN));
    while( $resp!=1 && $resp!=2 && $resp!=3 && $resp!=4 && $resp!=0){
        echo "Debe ingresar un valor válido \n";
        $resp = trim(fgets(STDIN));
    }
    return $resp;
}
//case 1
function pedirDatos($personas){
            echo "Ingrese el nombre \n";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido \n";
            $apellido = trim(fgets(STDIN));
            echo "Ingrese el tipo de documento \n";
            $tipo = trim(fgets(STDIN));
            echo "Ingrese el número de documento \n";
            $dni = trim(fgets(STDIN));
            $p = new Persona($nombre,$apellido,$tipo,$dni);
            array_push($personas,$p);
            echo "Usuario creado exitosamente\n";
            return $personas;
            

}

//case 2 mostrar datos de personas
function mostrarDatos($personas){
    echo "Usuarios cargados en el sistema: \n";
    for ($i=0;$i<count($personas);$i++){
        $p = $personas[$i];
        echo "Usuario N°".$i+1 . ": \n";
        echo $p;
    }
}
//case 3 modificar algún usuario
function setUsuario($personas){
    echo "Usuarios cargados en el sistema: \n";
    for ($i=0;$i<count($personas);$i++){
        $p = $personas[$i];
        echo "Usuario N°".$i+1 . ": \n";
        echo $p;
    }
    $personas=pedirUsuario($personas,$p);
    
}
function pedirUsuario($personas,$p){
    
    echo "Ingrese el número de usuario a modificar o 0(cero) para terminar \n";
    $n=trim(fgets(STDIN));
    $n=$n-1;
    if($n>=0 && $n<=count($personas)){
    $p = $personas[$i];
    echo "Ingrese 1 para modificar todos los datos \n";
    echo "Ingrese 2 para modificar nombre \n";
    echo "Ingrese 3 para modificar apellido \n";
    echo "Ingrese 4 para modificar tipo de documento \n";
    echo "Ingrese 5 para modificar número de documento \n";
    echo "Ingrese 0(cero) para cancelar \n";
    $resp=trim(fgets(STDIN));
    switch($resp){
        case 0:
            break;
        case 1:
            echo "Ingrese nombre \n";
            $atributo=trim(fgets(STDIN));
            $p->setNombre($atributo);
            echo "Ingrese apellido \n";
            $atributo=trim(fgets(STDIN));
            $p->setApellido($atributo);
            echo "Ingrese tipo de documento \n";
            $atributo=trim(fgets(STDIN));
            $p->SetTipo($atributo);
            echo "Ingrese número de documento \n";
            $atributo=trim(fgets(STDIN));
            $p->SetDni($atributo);
        case 2:
            echo "Ingrese nombre \n";
            $atributo=trim(fgets(STDIN));
            $p->setNombre($atributo);
            case 3:
                echo "Ingrese apellido \n";
                $atributo=trim(fgets(STDIN));
                $p->setApellido($atributo);
                case 4:
                 echo "Ingrese tipo de documento \n";
                 $atributo=trim(fgets(STDIN));
                 $p->SetTipo($atributo);
                 case 5:
                    echo "Ingrese número de documento \n";
                    $atributo=trim(fgets(STDIN));
                    $p->SetDni($atributo);
    }
    $personas[$i]=$p;
}
return $personas;
}
function crearCuentaBancaria($personas,$cuentasB){
    //$nroCuenta,$objPersona,$saldoActual,$interesAnual
    echo "Usuarios cargados en el sistema: \n";
    for ($i=0;$i<count($personas);$i++){
        $p = $personas[$i];
        echo "Usuario N°".$i+1 . ": \n";
        echo $p;
    }
    echo "Ingrese un numero de usuario a crearle una cuenta bancaria \n";
    $n=trim(fgets(STDIN));
    $n=$n-1;
    if($n>=0 && $n<count($personas)){
        $p = $personas[$n];
        if (!tieneCuenta($p,$cuentasB)){
        echo "Ingrese un numero de cuenta \n";
        $numC= trim(fgets(STDIN));
        echo "Ingrese el intés anual de la cuenta \n";
        $interes=trim(fgets(STDIN));
        $newCuenta = new CuentaBancaria ($numC,$p,0,$interes);
        array_push($cuentasB,$newCuenta);
        
        }
        
    }
    return $cuentasB;
}
//verifica si un usuario ya tiene cuenta bancaria o no
function tieneCuenta($persona,$cuentasB){
    if(count($cuentasB)>=1){

        $documento = $persona->getDni();
        for ($i=0;$i<count($cuentasB);$i++){
            $cuenta = $cuentasB[$i];
            $pTitular = $cuenta->getTitular();
            $dniT = $pTitular->getDni();
            if ($documento==$dniT){
                $tieneCuenta=true;
                echo "Error: Ese usuario ya posee una cuenta\n";
            }else{
                $tieneCuenta=false;
            }
        }
    }
    return $tieneCuenta;
    
}
?>