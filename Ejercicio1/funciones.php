<?php
function mainMenu(){
    echo "Bienvenid@!!!<\n>";
    echo "¿Qué operación desea realizar?<\n>";
    echo "1 para crear un nuevo usuario \n";
    echo "Ingresar 2 para ver los usuarios existentes<\n>";
    echo "Ingresar 3 para modificar algún pasajero<\n>";
    echo "Ingrese 4 para crear una cuenta bancaria<\n>";
    $resp = trim(fgets(STDIN));
    while(!is_numeric($resp) || resp!=1 || resp!=2 || resp!=3 || resp!=4){
        echo "Debe ingresar un valor válido";
        $resp = trim(fgets(STDIN));
    }
    return $resp;
}

?>