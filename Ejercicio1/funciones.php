<?php
$personas= array();
function mainMenu(){
    echo "Bienvenid@!!!<\n>";
    echo "¿Qué operación desea realizar?<\n>";
    echo "Ingresar 1 para crear un nuevo usuario \n";
    echo "Ingresar 2 para ver los usuarios existentes<\n>";
    echo "Ingresar 3 para modificar algún pasajero<\n>";
    echo "Ingrese 4 para crear una cuenta bancaria<\n>";
    $resp = trim(fgets(STDIN));
    while( $resp!=1 && $resp!=2 && $resp!=3 && $resp!=4 ){
        echo "Debe ingresar un valor válido \n";
        $resp = trim(fgets(STDIN));
    }
    return $resp;
}
function pedirDatos(){
            echo "Ingrese el nombre \n";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese el apellido \n";
            $apellido = trim(fgets(STDIN));
            echo "Ingrese el tipo de documento \n";
            $tipo = trim(fgets(STDIN));
            echo "Ingrese el número de documento \n";
            $dni = trim(fgets(STDIN));
            $p = new Persona($nombre,$apellido,$tipo,$dni);
            cargarPersona($personas,$p);

}

function cargarPersona($personas,$objPersona){
    array_push($personas,$objPersona);
    echo "Usuario creado exitosamente";
}
?>